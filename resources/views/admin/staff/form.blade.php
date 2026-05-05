@extends('admin.layout')

@section('page-title', isset($member) ? 'Edit Staff Member' : 'Add Staff Member')

@section('content')
    <div class="card">
        <h2 style="color: #003d7a;">{{ isset($member) ? 'Edit Staff Member' : 'Add Staff Member' }}</h2>

        <form action="{{ isset($member) ? route('admin.staff.update', $member) : route('admin.staff.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($member))
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="name">Full Name *</label>
                <input type="text" id="name" name="name" class="form-control" required value="{{ old('name', isset($member) ? $member->name : '') }}">
            </div>

            <div class="form-group">
                <label for="position">Position *</label>
                <input type="text" id="position" name="position" class="form-control" required value="{{ old('position', isset($member) ? $member->position : '') }}">
            </div>

            <div class="form-group">
                <label for="qualification">Qualification *</label>
                <input type="text" id="qualification" name="qualification" class="form-control" required value="{{ old('qualification', isset($member) ? $member->qualification : '') }}">
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($member) ? $member->email : '') }}">
            </div>

            <div class="form-group">
                <label for="bio">Biography</label>
                <textarea id="bio" name="bio" class="form-control">{{ old('bio', isset($member) ? $member->bio : '') }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Upload Photo</label>
                <input type="file" id="image" name="image" class="form-control" accept="image/*">
                @if(isset($member) && $member->image)
                    <small>Current image: {{ $member->image }}</small>
                @endif
            </div>

            <div style="display: flex; gap: 1rem;">
                <button type="submit" class="btn-primary-admin">{{ isset($member) ? 'Update Member' : 'Add Member' }}</button>
                <a href="{{ route('admin.staff.index') }}" style="padding: 0.7rem 1.5rem; border: 2px solid #ddd; border-radius: 6px; text-decoration: none; color: #333; font-weight: 600;">Cancel</a>
            </div>
        </form>
    </div>
@endsection