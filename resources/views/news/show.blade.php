@extends('layouts.sidebar')

@section('title', 'detail berita')

@section('content')
<div class="container">
    <h1>{{ $news->title }}</h1>
    <img src="{{ asset('news-images/' . $news->image) }}" alt="{{ $news->title }}" style="max-width: 100%; height: auto;">
    <p>{{ $news->content }}</p>
</div>
@endsection