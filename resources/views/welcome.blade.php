@extends('layouts.master')

@section('title', 'Libreria - Catalogo Libri')

@section('content')
<div class="container-fluid">
    <!-- Hero Section -->
    <div class="hero-section text-center py-5 mb-5">
        <div class="container">
            <h1 class="hero-title display-3 fw-bold mb-3">📚 Libreria Moderna</h1>
            <p class="hero-subtitle lead fs-4">Scopri la nostra collezione di libri straordinari</p>
        </div>
    </div>

    <div class="container">
        @if(isset($books) && $books->count() > 0)
            <!-- Genre Statistics -->
            <div class="genre-stats mb-5">
                <h2 class="section-title text-center mb-4">📊 Statistiche per Genere</h2>
                <div class="row g-3">
                    @php
                        $genreStats = $books->groupBy('genre')->map->count();
                    @endphp
                    @foreach($genreStats as $genre => $count)
                        <div class="col-md-3 col-sm-6">
                            <div class="stat-card card h-100 text-center border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">{{ ucfirst($genre) }}</h5>
                                    <p class="card-text display-6 fw-bold text-secondary">{{ $count }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Books Grid -->
            <div class="books-section">
                <h2 class="section-title text-center mb-4">📖 Catalogo Libri</h2>
                <div class="row g-4">
                    @foreach($books as $book)
                        <div class="col-lg-4 col-md-6">
                            <div class="book-card card h-100 shadow-sm {{ !$book->available ? 'book-unavailable' : 'book-available' }}">
                                <div class="book-cover-container position-relative">
                                    <div class="book-cover d-flex align-items-center justify-content-center">
                                        <div class="book-icon">📚</div>
                                    </div>
                                    <div class="availability-badge position-absolute top-0 end-0 m-2">
                                        @if($book->available)
                                            <span class="badge bg-success">Disponibile</span>
                                        @else
                                            <span class="badge bg-danger">Non Disponibile</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="book-title card-title fw-bold">{{ $book->title }}</h5>
                                    <p class="book-author text-muted mb-2">di <strong>{{ $book->author }}</strong></p>
                                    
                                    <div class="book-details mb-3">
                                        <div class="row g-2">
                                            <div class="col-6">
                                                <small class="text-muted">Genere:</small><br>
                                                <span class="badge bg-primary">{{ ucfirst($book->genre) }}</span>
                                            </div>
                                            <div class="col-6">
                                                <small class="text-muted">Anno:</small><br>
                                                <span class="fw-semibold">{{ $book->publication_year }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="book-meta">
                                        <p class="mb-1"><small class="text-muted">Casa Editrice:</small> {{ $book->publisher }}</p>
                                        <p class="mb-1"><small class="text-muted">Pagine:</small> {{ $book->number_of_pages }}</p>
                                        <p class="mb-1"><small class="text-muted">ISBN:</small> {{ $book->isbn }}</p>
                                        <p class="mb-0">
                                            <small class="text-muted">Condizione:</small> 
                                            <span class="badge 
                                                @if($book->book_condition === 'new') bg-success
                                                @elseif($book->book_condition === 'used') bg-warning
                                                @else bg-secondary
                                                @endif">
                                                {{ ucfirst($book->book_condition) }}
                                            </span>
                                        </p>
                                    </div>

                                    @if(!$book->available && isset($book->borrowed_by))
                                        <div class="mt-2">
                                            <small class="text-danger">Prestato a: <strong>{{ $book->borrowed_by }}</strong></small>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="text-center py-5">
                <h3 class="text-muted">Nessun libro trovato nel catalogo</h3>
                <p class="text-muted">Torna più tardi per vedere i nuovi arrivi!</p>
            </div>
        @endif
    </div>
</div>
@endsection