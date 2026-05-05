@extends('admin.layout')

@section('page-title', 'Manage Gallery')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
        <h2 style="color: #003d7a;">Gallery Items</h2>
        <a href="{{ route('admin.gallery.create') }}" class="btn-primary-admin">+ Add Gallery Item</a>
    </div>

    <div class="card">
        @if($galleryItems->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Order</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($galleryItems as $item)
                        <tr>
                            <td>
                                <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->title }}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 4px;">
                            </td>
                            <td><strong>{{ $item->title }}</strong></td>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->order }}</td>
                            <td>
                                <a href="{{ route('admin.gallery.edit', $item) }}" class="btn-edit">Edit</a>
                                <form action="{{ route('admin.gallery.destroy', $item) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete this gallery item?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p style="text-align: center; color: #666; padding: 2rem;">No gallery items found. <a href="{{ route('admin.gallery.create') }}" style="color: #0066cc;">Add one</a>.</p>
        @endif
    </div>
@endsection
