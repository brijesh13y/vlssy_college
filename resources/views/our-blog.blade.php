@extends('layout')

@section('title', 'Our Blog - VLSSY Inter College')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Our Blog</h1>
            <p>Latest news, events, and educational insights from our community</p>
        </div>
    </section>

    <!-- Blog Content -->
    <section>
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 class="section-title">Latest Posts</h2>
            <p class="section-subtitle">Stay updated with our educational community</p>

            @if($blogs->count() > 0)
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem; margin-top: 3rem;">
                    @foreach($blogs as $blog)
                        <div style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                            @if($blog->featured_image)
                                <img src="{{ asset('images/' . $blog->featured_image) }}" alt="{{ $blog->title }}" style="width: 100%; height: 200px; object-fit: cover;">
                            @else
                                <div style="height: 200px; background: linear-gradient(135deg, #0066cc, #003d7a); display: flex; align-items: center; justify-content: center; color: white; font-size: 3rem;">📝</div>
                            @endif
                            <div style="padding: 2rem;">
                                <div style="display: flex; gap: 1rem; margin-bottom: 1rem; font-size: 0.9rem; color: #666;">
                                    <span>📅 {{ $blog->published_at->format('M d, Y') }}</span>
                                    <span>👤 {{ $blog->author }}</span>
                                </div>
                                <h3 style="color: #003d7a; margin-bottom: 1rem;">{{ $blog->title }}</h3>
                                <p style="color: #666; margin-bottom: 1.5rem;">{{ $blog->excerpt }}</p>
                                <a href="#" style="color: #0066cc; text-decoration: none; font-weight: 600;">Read More →</a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                @if($blogs->hasPages())
                    <div style="text-align: center; margin-top: 3rem;">
                        {{ $blogs->links() }}
                    </div>
                @endif
            @else
                <div style="text-align: center; padding: 4rem; background: #f8f9fa; border-radius: 10px; margin-top: 3rem;">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">📝</div>
                    <h3>No Blog Posts Yet</h3>
                    <p>Blog posts will be published soon. Check back later!</p>
                </div>
            @endif
                    <div style="height: 200px; background: linear-gradient(135deg, #28a745, #20c997); display: flex; align-items: center; justify-content: center; color: white; font-size: 3rem;">🌱</div>
                    <div style="padding: 2rem;">
                        <div style="display: flex; gap: 1rem; margin-bottom: 1rem; font-size: 0.9rem; color: #666;">
                            <span>📅 March 5, 2026</span>
                            <span>👤 Environment Club</span>
                        </div>
                        <h3 style="color: #003d7a; margin-bottom: 1rem;">Tree Plantation Drive</h3>
                        <p style="color: #666; margin-bottom: 1.5rem;">Our students participated in a community tree plantation drive, planting over 200 saplings in the local park. This initiative promotes environmental awareness and community service.</p>
                        <a href="#" style="color: #0066cc; text-decoration: none; font-weight: 600;">Read More →</a>
                    </div>
                </div>

                <!-- Blog Post 4 -->
                <div style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    <div style="height: 200px; background: linear-gradient(135deg, #6f42c1, #e83e8c); display: flex; align-items: center; justify-content: center; color: white; font-size: 3rem;">🎭</div>
                    <div style="padding: 2rem;">
                        <div style="display: flex; gap: 1rem; margin-bottom: 1rem; font-size: 0.9rem; color: #666;">
                            <span>📅 February 28, 2026</span>
                            <span>👤 Cultural Committee</span>
                        </div>
                        <h3 style="color: #003d7a; margin-bottom: 1rem;">Annual Cultural Fest Highlights</h3>
                        <p style="color: #666; margin-bottom: 1.5rem;">The annual cultural fest was a grand success with performances in music, dance, and drama. Students showcased their talents and celebrated cultural diversity.</p>
                        <a href="#" style="color: #0066cc; text-decoration: none; font-weight: 600;">Read More →</a>
                    </div>
                </div>

                <!-- Blog Post 5 -->
                <div style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    <div style="height: 200px; background: linear-gradient(135deg, #fd7e14, #ffc107); display: flex; align-items: center; justify-content: center; color: white; font-size: 3rem;">🏆</div>
                    <div style="padding: 2rem;">
                        <div style="display: flex; gap: 1rem; margin-bottom: 1rem; font-size: 0.9rem; color: #666;">
                            <span>📅 February 20, 2026</span>
                            <span>👤 Sports Department</span>
                        </div>
                        <h3 style="color: #003d7a; margin-bottom: 1rem;">Inter-School Basketball Championship</h3>
                        <p style="color: #666; margin-bottom: 1.5rem;">Our basketball team brought home the championship trophy in the inter-school tournament. The team's dedication and teamwork led to this remarkable achievement.</p>
                        <a href="#" style="color: #0066cc; text-decoration: none; font-weight: 600;">Read More →</a>
                    </div>
                </div>

                <!-- Blog Post 6 -->
                <div style="background: white; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    <div style="height: 200px; background: linear-gradient(135deg, #dc3545, #fd7e14); display: flex; align-items: center; justify-content: center; color: white; font-size: 3rem;">📖</div>
                    <div style="padding: 2rem;">
                        <div style="display: flex; gap: 1rem; margin-bottom: 1rem; font-size: 0.9rem; color: #666;">
                            <span>📅 February 15, 2026</span>
                            <span>👤 Library Committee</span>
                        </div>
                        <h3 style="color: #003d7a; margin-bottom: 1rem;">New Library Books Collection</h3>
                        <p style="color: #666; margin-bottom: 1.5rem;">We've added 500 new books to our library collection, including the latest novels, reference materials, and educational resources for all grade levels.</p>
                        <a href="#" style="color: #0066cc; text-decoration: none; font-weight: 600;">Read More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background-color: #e6f0ff; text-align: center;">
        <h2 class="section-title">Stay Connected</h2>
        <p class="section-subtitle">Subscribe to our newsletter for regular updates</p>
        <a href="{{ route('contact') }}" class="btn-primary" style="display: inline-block;">Subscribe Now</a>
    </section>
@endsection