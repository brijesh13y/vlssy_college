@extends('admin.layout')

@section('page-title', isset($service) ? 'Edit Service' : 'Add New Service')

@section('content')
    <div class="card">
        <h2 style="color: #003d7a;">{{ isset($service) ? 'Edit Service' : 'Add New Service' }}</h2>

        <form action="{{ isset($service) ? route('admin.services.update', $service) : route('admin.services.store') }}" method="POST">
            @csrf
            @if(isset($service))
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="title">Service Title *</label>
                <input type="text" id="title" name="title" class="form-control" required value="{{ old('title', isset($service) ? $service->title : '') }}">
            </div>

            <div class="form-group">
                <label for="slug">Slug (URL-friendly) *</label>
                <input type="text" id="slug" name="slug" class="form-control" required value="{{ old('slug', isset($service) ? $service->slug : '') }}">
            </div>

            <div class="form-group">
                <label for="short_description">Short Description *</label>
                <input type="text" id="short_description" name="short_description" class="form-control" required value="{{ old('short_description', isset($service) ? $service->short_description : '') }}">
            </div>

            <div class="form-group">
                <label for="description">Full Description *</label>
                <textarea id="description" name="description" class="form-control" required>{{ old('description', isset($service) ? $service->description : '') }}</textarea>
            </div>

            <div class="form-group">
                <label for="icon">Icon (Emoji) *</label>
                <input type="text" id="icon" name="icon" class="form-control" placeholder="e.g., 📚" required value="{{ old('icon', isset($service) ? $service->icon : '') }}">
            </div>

            <div class="form-group">
                <label for="order">Display Order *</label>
                <input type="number" id="order" name="order" class="form-control" required value="{{ old('order', isset($service) ? $service->order : 0) }}">
            </div>

            <div style="display: flex; gap: 1rem;">
                <button type="submit" class="btn-primary-admin">{{ isset($service) ? 'Update Service' : 'Add Service' }}</button>
                <a href="{{ route('admin.services.index') }}" style="padding: 0.7rem 1.5rem; border: 2px solid #ddd; border-radius: 6px; text-decoration: none; color: #333; font-weight: 600;">Cancel</a>
            </div>
        </form>
    </div>
@endsection