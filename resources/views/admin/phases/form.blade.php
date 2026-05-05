@extends('admin.layout')

@section('page-title', isset($phase) ? 'Edit Educational Phase' : 'Create Educational Phase')

@section('content')
    <div class="card">
        <h2>{{ isset($phase) ? 'Edit Educational Phase' : 'Create New Educational Phase' }}</h2>

        <form action="{{ isset($phase) ? route('admin.phases.update', $phase) : route('admin.phases.store') }}" method="POST">
            @csrf
            @if(isset($phase))
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="title">Phase Title</label>
                <input type="text" id="title" name="title" class="form-control" required value="{{ old('title', $phase->title ?? '') }}">
                @error('title')
                    <span style="color: #dc3545; font-size: 0.9rem;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="icon">Icon (Emoji)</label>
                <input type="text" id="icon" name="icon" class="form-control" required maxlength="10" placeholder="e.g., 🌱, 📖, 🎓, 🚀" value="{{ old('icon', $phase->icon ?? '') }}">
                @error('icon')
                    <span style="color: #dc3545; font-size: 0.9rem;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control" required rows="5">{{ old('description', $phase->description ?? '') }}</textarea>
                @error('description')
                    <span style="color: #dc3545; font-size: 0.9rem;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label>Features (One per field)</label>
                <div id="features-container">
                    @if(isset($phase) && $phase->features)
                        @foreach($phase->features as $feature)
                            <div style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem;">
                                <input type="text" name="features[]" class="form-control" placeholder="e.g., 📚 Interactive Learning" value="{{ $feature }}">
                                <button type="button" class="btn-danger" onclick="this.parentElement.remove()">Remove</button>
                            </div>
                        @endforeach
                    @else
                        <div style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <input type="text" name="features[]" class="form-control" placeholder="e.g., 📚 Interactive Learning">
                            <button type="button" class="btn-danger" onclick="this.parentElement.remove()">Remove</button>
                        </div>
                    @endif
                </div>
                <button type="button" class="btn-primary-admin" style="margin-top: 1rem;" onclick="addFeature()">+ Add Feature</button>
                @error('features')
                    <span style="color: #dc3545; font-size: 0.9rem; display: block; margin-top: 0.5rem;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="order">Display Order</label>
                <input type="number" id="order" name="order" class="form-control" required value="{{ old('order', $phase->order ?? 1) }}">
                @error('order')
                    <span style="color: #dc3545; font-size: 0.9rem;">{{ $message }}</span>
                @enderror
            </div>

            <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                <button type="submit" class="btn-primary-admin">{{ isset($phase) ? 'Update Phase' : 'Create Phase' }}</button>
                <a href="{{ route('admin.phases.index') }}" class="btn-primary-admin" style="background: #6c757d; text-decoration: none;">Cancel</a>
            </div>
        </form>
    </div>

    <script>
        function addFeature() {
            const container = document.getElementById('features-container');
            const div = document.createElement('div');
            div.style.display = 'flex';
            div.style.gap = '0.5rem';
            div.style.marginBottom = '0.5rem';
            div.innerHTML = `
                <input type="text" name="features[]" class="form-control" placeholder="e.g., 📚 Interactive Learning">
                <button type="button" class="btn-danger" onclick="this.parentElement.remove()">Remove</button>
            `;
            container.appendChild(div);
        }
    </script>
@endsection
