@extends('admin.layout')

@section('page-title', isset($gallery) ? 'Edit Gallery Item' : 'Add Gallery Item')

@section('content')
    <div class="card">
        <h2 style="color: #003d7a;">{{ isset($gallery) ? 'Edit Gallery Item' : 'Add New Gallery Item' }}</h2>

        <form action="{{ isset($gallery) ? route('admin.gallery.update', $gallery) : route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($gallery))
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="title">Image Title *</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $gallery->title ?? '') }}" required>
                @error('title')<span style="color: #dc3545; font-size: 0.9rem;">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control">{{ old('description', $gallery->description ?? '') }}</textarea>
                @error('description')<span style="color: #dc3545; font-size: 0.9rem;">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="category">Category *</label>
                <select id="category" name="category" class="form-control" required>
                    <option value="">-- Select Category --</option>
                    <option value="Classroom" {{ old('category', $gallery->category ?? '') === 'Classroom' ? 'selected' : '' }}>Classroom</option>
                    <option value="Library" {{ old('category', $gallery->category ?? '') === 'Library' ? 'selected' : '' }}>Library</option>
                    <option value="Laboratory" {{ old('category', $gallery->category ?? '') === 'Laboratory' ? 'selected' : '' }}>Laboratory</option>
                    <option value="Sports" {{ old('category', $gallery->category ?? '') === 'Sports' ? 'selected' : '' }}>Sports</option>
                    <option value="Event" {{ old('category', $gallery->category ?? '') === 'Event' ? 'selected' : '' }}>Event</option>
                    <option value="Infrastructure" {{ old('category', $gallery->category ?? '') === 'Infrastructure' ? 'selected' : '' }}>Infrastructure</option>
                    <option value="Other" {{ old('category', $gallery->category ?? '') === 'Other' ? 'selected' : '' }}>Other</option>
                </select>
                @error('category')<span style="color: #dc3545; font-size: 0.9rem;">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="order">Display Order *</label>
                <input type="number" id="order" name="order" class="form-control" value="{{ old('order', $gallery->order ?? 0) }}" required>
                @error('order')<span style="color: #dc3545; font-size: 0.9rem;">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="image">{{ isset($gallery) ? 'Update Image' : 'Upload Image' }} {{ !isset($gallery) ? '*' : '' }}</label>
                @if(isset($gallery) && $gallery->image)
                    <div style="margin-bottom: 1rem;">
                        <p style="color: #666; font-size: 0.9rem;">Current image:</p>
                        <img src="{{ asset('images/' . $gallery->image) }}" alt="{{ $gallery->title }}" style="max-width: 300px; max-height: 200px; border-radius: 8px;">
                    </div>
                @endif
                <input type="file" id="image" name="image" class="form-control" accept="image/*" {{ !isset($gallery) ? 'required' : '' }}>
                @error('image')<span style="color: #dc3545; font-size: 0.9rem;">{{ $message }}</span>@enderror
            </div>

            <div style="display: flex; gap: 1rem;">
                <button type="submit" class="btn-primary-admin">{{ isset($gallery) ? 'Update Gallery Item' : 'Add Gallery Item' }}</button>
                <a href="{{ route('admin.gallery.index') }}" style="padding: 0.7rem 1.5rem; border: 2px solid #ddd; border-radius: 6px; text-decoration: none; color: #333; font-weight: 600; transition: all 0.3s;">Cancel</a>
            </div>
        </form>
    </div>
@endsection
