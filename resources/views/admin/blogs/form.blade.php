@extends('admin.layout')

@section('page-title', isset($blog) ? 'Edit Blog Post' : 'Create New Blog Post')

@section('content')
    <div class="card">
        <h2 style="color: #003d7a;">{{ isset($blog) ? 'Edit Blog Post' : 'Create New Blog Post' }}</h2>

        <form action="{{ isset($blog) ? route('admin.blogs.update', $blog) : route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($blog))
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="title">Blog Title *</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $blog->title ?? '') }}" required>
                @error('title')<span style="color: #dc3545; font-size: 0.9rem;">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="slug">Slug (URL-friendly) *</label>
                <input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug', $blog->slug ?? '') }}" required>
                @error('slug')<span style="color: #dc3545; font-size: 0.9rem;">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="author">Author *</label>
                <input type="text" id="author" name="author" class="form-control" value="{{ old('author', $blog->author ?? '') }}" required>
                @error('author')<span style="color: #dc3545; font-size: 0.9rem;">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="excerpt">Excerpt (Short Summary) *</label>
                <textarea id="excerpt" name="excerpt" class="form-control" required>{{ old('excerpt', $blog->excerpt ?? '') }}</textarea>
                @error('excerpt')<span style="color: #dc3545; font-size: 0.9rem;">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="content">Full Content *</label>
                <textarea id="content" name="content" class="form-control" style="min-height: 300px;" required>{{ old('content', $blog->content ?? '') }}</textarea>
                @error('content')<span style="color: #dc3545; font-size: 0.9rem;">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="featured_image">Featured Image</label>
                @if(isset($blog) && $blog->featured_image)
                    <div style="margin-bottom: 1rem;">
                        <img src="{{ asset('images/' . $blog->featured_image) }}" alt="{{ $blog->title }}" style="max-width: 300px; max-height: 200px; border-radius: 8px;">
                    </div>
                @endif
                <input type="file" id="featured_image" name="featured_image" class="form-control" accept="image/*">
                @error('featured_image')<span style="color: #dc3545; font-size: 0.9rem;">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="published_at">Publish Date *</label>
                <input type="date" id="published_at" name="published_at" class="form-control" value="{{ old('published_at', isset($blog) ? $blog->published_at->format('Y-m-d') : '') }}" required>
                @error('published_at')<span style="color: #dc3545; font-size: 0.9rem;">{{ $message }}</span>@enderror
            </div>

            <div style="display: flex; gap: 1rem;">
                <button type="submit" class="btn-primary-admin">{{ isset($blog) ? 'Update Blog Post' : 'Create Blog Post' }}</button>
                <a href="{{ route('admin.blogs.index') }}" style="padding: 0.7rem 1.5rem; border: 2px solid #ddd; border-radius: 6px; text-decoration: none; color: #333; font-weight: 600; transition: all 0.3s;">Cancel</a>
            </div>
        </form>
    </div>
@endsection
