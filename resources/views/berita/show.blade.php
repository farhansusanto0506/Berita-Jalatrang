@extends('layouts.app')

@section('title', $berita->judul)

@section('content')
    <a href="{{ route('berita.index') }}">← Kembali ke Berita</a>

    <div class="card mt-3">
        <img src="{{ $berita->gambar ? asset('images/berita/'.$berita->gambar) : 'https://placehold.co/800x300?text=Berita+Desa' }}"
             class="card-img-top" style="max-height:350px; object-fit:cover;" alt="{{ $berita->judul }}">
        <div class="card-body">
            <span class="badge badge-kategori text-white">{{ $berita->kategori }}</span>
            <small class="text-muted ms-1">
                {{ $berita->created_at->translatedFormat('l, d F Y') }} • {{ $berita->penulis }} • <i class="bi bi-eye"></i> {{ $berita->dilihat }} dibaca
            </small>

            <h2 class="mt-3">{{ $berita->judul }}</h2>
            <div class="isi-berita">{!! $berita->isi !!}</div>

            <a href="{{ route('berita.index') }}" class="btn btn-sm btn-outline-primary mt-3">Kembali ke Daftar</a>
        </div>
    </div>
@endsection