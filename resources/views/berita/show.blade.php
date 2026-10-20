@extends('layouts.app')

@section('title', $berita->judul)

@section('content')
    <a href="{{ route('berita.index') }}">← Kembali ke Berita</a>

    <div class="card mt-3">
        {{-- PATH GAMBAR KE STORAGE --}}
        <img src="{{ $berita->gambar ? asset('storage/'.$berita->gambar) : 'https://placehold.co/800x300?text=Berita+Desa' }}"
             class="card-img-top" style="max-height:350px; object-fit:cover;" alt="{{ $berita->judul }}">
        
        <div class="card-body">
            <span class="badge badge-kategori text-white">{{ $berita->kategori->nama }}</span>

            <h2 class="mt-3">{{ $berita->judul }}</h2>
            <p class="text-muted mb-3">Penulis: {{ $berita->user->name }}</p>

            <div class="mb-3">
                @foreach ($berita->tags as $tag)
                    <a href="{{ route('berita.index', ['tag' => $tag->id]) }}"
                       class="tag-pill text-decoration-none">#{{ $tag->nama }}</a>
                @endforeach
            </div>

            {{-- MENAMPILKAN ISI BERITA --}}
            <div class="mt-4">
                {!! nl2br(e($berita->isi)) !!}
            </div>
        </div>
    </div>
@endsection