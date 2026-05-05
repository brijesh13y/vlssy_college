@extends('admin.layout')

@section('page-title', isset($facility) ? 'Edit Facility' : 'Create Facility')

@section('content')
    <div class="card">
        <h2>{{ isset($facility) ? 'Edit Facility' : 'Create New Facility' }}</h2>

        <form action="{{ isset($facility) ? route('admin.facilities.update', $facility) : route('admin.facilities.store') }}" method="POST">
            @csrf
            @if(isset($facility))
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="title">Facility Title</label>
                <input type="text" id="title" name="title" class="form-control" required value="{{ old('title', $facility->title ?? '') }}">
                @error('title')
                    <span style="color: #dc3545; font-size: 0.9rem;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="icon">Icon (Emoji)</label>
                <input type="text" id="icon" name="icon" class="form-control" required maxlength="10" placeholder="e.g., 🏫, 📚, 🔬, 💻" value="{{ old('icon', $facility->icon ?? '') }}">
                @error('icon')
                    <span style="color: #dc3545; font-size: 0.9rem;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control" required rows="5">{{ old('description', $facility->description ?? '') }}</textarea>
                @error('description')
                    <span style="color: #dc3545; font-size: 0.9rem;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="order">Display Order</label>
                <input type="number" id="order" name="order" class="form-control" required value="{{ old('order', $facility->order ?? 1) }}">
                @error('order')
                    <span style="color: #dc3545; font-size: 0.9rem;">{{ $message }}</span>
                @enderror
            </div>

            <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                <button type="submit" class="btn-primary-admin">{{ isset($facility) ? 'Update Facility' : 'Create Facility' }}</button>
                <a href="{{ route('admin.facilities.index') }}" class="btn-primary-admin" style="background: #6c757d; text-decoration: none;">Cancel</a>
            </div>
        </form>
    </div>
@endsection
