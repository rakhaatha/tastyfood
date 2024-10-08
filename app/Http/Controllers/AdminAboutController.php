<?php
namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    // Menampilkan form edit visi dan misi
    public function edit()
    {
        // Ambil data visi dan misi dari database
        $about = About::first();
        return view('admin.edit-about', compact('about'));
    }

    // Memproses update visi dan misi
    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);

        // Ambil data tentang (visi dan misi) dari database
        $about = About::first();
        if ($about) {
            // Jika ada, lakukan update
            $about->update([
                'visi' => $request->visi,
                'misi' => $request->misi,
            ]);
        } else {
            // Jika belum ada, buat baru
            About::create([
                'visi' => $request->visi,
                'misi' => $request->misi,
            ]);
        }

        return redirect()->back()->with('success', 'Visi dan misi berhasil diperbarui!');
    }
}
?>