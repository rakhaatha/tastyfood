<?php
namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    // Menampilkan daftar galeri
    public function index()
    {
        $galeris = Galeri::all();
        return view('galeri.index', compact('galeris'));
    }

    // Menampilkan form untuk membuat galeri baru
    public function create()
    {
        return view('galeri.create');
    }

    // Menyimpan data galeri baru
    public function store(Request $request)
    {
        $request->validate([
          
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|',
        
        ]);

        // Upload gambar
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        // Menyimpan data ke database
        Galeri::create([
            'image' => $imageName,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil ditambahkan');
    }

    // Menampilkan detail galeri (opsional)
    public function show($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('galeri.show', compact('galeri'));
    }

    // Menghapus galeri
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        // Hapus gambar dari folder
        if (file_exists(public_path('images/' . $galeri->image))) {
            unlink(public_path('images/' . $galeri->image));
        }
        $galeri->delete();
        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil dihapus');
    }

    public function gallery()
    {
        $galeris = Galeri::all();
        return view('image', compact('galeris'));
    }
}