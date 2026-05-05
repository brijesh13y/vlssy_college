@extends('layout')

@section('title', 'Gallery - VLSSY Inter College')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Gallery</h1>
            <p>Explore our campus life and events through photos</p>
        </div>
    </section>

    <!-- Gallery Content -->
    <section>
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 class="section-title">Campus Gallery</h2>
            <p class="section-subtitle">A glimpse into our vibrant educational environment</p>

            @if($galleryItems->count() > 0)
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 3rem;">
                    @foreach($galleryItems as $item)
                        <div style="background: #f8f9fa; padding: 2rem; border-radius: 10px; text-align: center; transition: transform 0.3s;">
                            @if($item->image)
                                <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->title }}" style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px; margin-bottom: 1rem;">
                            @else
                                <div style="font-size: 4rem; margin-bottom: 1rem;">📸</div>
                            @endif
                            <h3>{{ $item->title }}</h3>
                            <p>{{ $item->description ?: 'Beautiful campus moment' }}</p>
                            <small style="color: #666; display: block; margin-top: 0.5rem;">Category: {{ $item->category }}</small>
                        </div>
                    @endforeach
                </div>
            @else
                <div style="text-align: center; padding: 4rem; background: #f8f9fa; border-radius: 10px; margin-top: 3rem;">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">📷</div>
                    <h3>No Gallery Items Yet</h3>
                    <p>Gallery items will be added soon. Check back later!</p>
                </div>
            @endif
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background-color: #e6f0ff; text-align: center;">
        <h2 class="section-title">Visit Our Campus</h2>
        <p class="section-subtitle">Experience our facilities in person</p>
        <a href="{{ route('contact') }}" class="btn-primary" style="display: inline-block;">Schedule a Visit</a>
    </section>
@endsection