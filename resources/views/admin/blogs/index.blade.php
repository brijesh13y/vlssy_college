@extends('admin.layout')

@section('page-title', 'Manage Blogs')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
        <h2 style="color: #003d7a;">Blog Posts</h2>
        <a href="{{ route('admin.blogs.create') }}" class="btn-primary-admin">+ Add New Blog Post</a>
    </div>

    <div class="card">
        @if($blogs->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Published Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <td><strong>{{ $blog->title }}</strong></td>
                            <td>{{ $blog->author }}</td>
                            <td>{{ $blog->published_at->format('M d, Y') }}</td>
                            <td>
                                <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn-edit">Edit</a>
                                <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete this blog post?');">
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
            <p style="text-align: center; color: #666; padding: 2rem;">No blog posts found. <a href="{{ route('admin.blogs.create') }}" style="color: #0066cc;">Create one</a>.</p>
        @endif
    </div>
@endsection
