@extends('admin.layout')

@section('page-title', isset($testimonial) ? 'Edit Testimonial' : 'Add Testimonial')

@section('content')
    <div class="card">
        <h2 style="color: #003d7a;">{{ isset($testimonial) ? 'Edit Testimonial' : 'Add Testimonial' }}</h2>

        <form action="{{ isset($testimonial) ? route('admin.testimonials.update', $testimonial) : route('admin.testimonials.store') }}" method="POST">
            @csrf
            @if(isset($testimonial))
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="client_name">Client Name *</label>
                <input type="text" id="client_name" name="client_name" class="form-control" required value="{{ old('client_name', isset($testimonial) ? $testimonial->client_name : '') }}">
            </div>

            <div class="form-group">
                <label for="company">Company *</label>
                <input type="text" id="company" name="company" class="form-control" required value="{{ old('company', isset($testimonial) ? $testimonial->company : '') }}">
            </div>

            <div class="form-group">
                <label for="content">Testimonial Content *</label>
                <textarea id="content" name="content" class="form-control" required>{{ old('content', isset($testimonial) ? $testimonial->content : '') }}</textarea>
            </div>

            <div class="form-group">
                <label for="rating">Rating (1-5) *</label>
                <select id="rating" name="rating" class="form-control" required>
                    <option value="">Select Rating</option>
                    @for($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}" {{ old('rating', isset($testimonial) ? $testimonial->rating : '') == $i ? 'selected' : '' }}>
                            {{ $i }} Star{{ $i > 1 ? 's' : '' }}
                        </option>
                    @endfor
                </select>
            </div>

            <div class="form-group">
                <label style="display: flex; align-items: center; gap: 0.5rem;">
                    <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', isset($testimonial) ? $testimonial->is_featured : false) ? 'checked' : '' }}>
                    Featured Testimonial
                </label>
            </div>

            <div style="display: flex; gap: 1rem;">
                <button type="submit" class="btn-primary-admin">{{ isset($testimonial) ? 'Update Testimonial' : 'Add Testimonial' }}</button>
                <a href="{{ route('admin.testimonials.index') }}" style="padding: 0.7rem 1.5rem; border: 2px solid #ddd; border-radius: 6px; text-decoration: none; color: #333; font-weight: 600;">Cancel</a>
            </div>
        </form>
    </div>
@endsection