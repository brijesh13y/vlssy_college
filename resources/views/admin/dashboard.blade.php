@extends('admin.layout')

@section('page-title', 'Dashboard')

@section('content')
    <div class="stats">
        <div class="stat-card">
            <div class="stat-label">User Queries</div>
            <div class="stat-number">{{ $queriesCount }}</div>
            <a href="{{ route('admin.queries.index') }}" style="color: #0066cc; text-decoration: none;">View →</a>
        </div>
        <div class="stat-card" style="border-top-color: #dc3545;">
            <div class="stat-label">Unread Messages</div>
            <div class="stat-number">{{ $unreadCount }}</div>
            <a href="{{ route('admin.queries.index') }}" style="color: #0066cc; text-decoration: none;">View →</a>
        </div>
        <div class="stat-card" style="border-top-color: #28a745;">
            <div class="stat-label">Staff Members</div>
            <div class="stat-number">{{ $staffCount }}</div>
            <a href="{{ route('admin.staff.index') }}" style="color: #0066cc; text-decoration: none;">View →</a>
        </div>
        <div class="stat-card" style="border-top-color: #ffc107;">
            <div class="stat-label">Testimonials</div>
            <div class="stat-number">{{ $testimonialsCount }}</div>
            <a href="{{ route('admin.testimonials.index') }}" style="color: #0066cc; text-decoration: none;">View →</a>
        </div>
        <div class="stat-card" style="border-top-color: #17a2b8;">
            <div class="stat-label">Blog Posts</div>
            <div class="stat-number">{{ $blogsCount }}</div>
            <a href="{{ route('admin.blogs.index') }}" style="color: #0066cc; text-decoration: none;">View →</a>
        </div>
        <div class="stat-card" style="border-top-color: #6f42c1;">
            <div class="stat-label">Gallery Items</div>
            <div class="stat-number">{{ $galleryCount }}</div>
            <a href="{{ route('admin.gallery.index') }}" style="color: #0066cc; text-decoration: none;">View →</a>
        </div>
    </div>

    <div class="card">
        <h2>Recent User Queries</h2>
        @if($queries->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($queries as $query)
                        <tr style="background: {{ !$query->is_read ? '#e8f4f8' : 'white' }};">
                            <td><strong>{{ $query->name }}</strong> {{ !$query->is_read ? '🔔 NEW' : '' }}</td>
                            <td>{{ $query->email }}</td>
                            <td>{{ $query->subject }}</td>
                            <td>{{ $query->created_at->format('M d, Y') }}</td>
                            <td>
                                <a href="{{ route('admin.queries.show', $query) }}" class="btn-edit">View</a>
                                <form action="{{ route('admin.queries.destroy', $query) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure?');">
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
            <p style="color: #666; margin-top: 1rem;">No queries received yet.</p>
        @endif
    </div>
@endsection