@extends('admin.layout')

@section('page-title', 'User Queries')

@section('content')
    <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
            <h2>User Queries & Messages</h2>
            <span style="background: #dc3545; color: white; padding: 0.5rem 1rem; border-radius: 20px; font-weight: 600;">
                {{ $queries->total() }} Total Queries
            </span>
        </div>

        @if($queries->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 5%;">Status</th>
                        <th style="width: 15%;">Name</th>
                        <th style="width: 20%;">Email</th>
                        <th style="width: 25%;">Subject</th>
                        <th style="width: 15%;">Date</th>
                        <th style="width: 20%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($queries as $query)
                        <tr style="background: {{ !$query->is_read ? '#e8f4f8' : 'white' }};">
                            <td>
                                @if(!$query->is_read)
                                    <span style="background: #dc3545; color: white; padding: 0.25rem 0.75rem; border-radius: 12px; font-size: 0.85rem;">NEW</span>
                                @else
                                    <span style="background: #28a745; color: white; padding: 0.25rem 0.75rem; border-radius: 12px; font-size: 0.85rem;">READ</span>
                                @endif
                            </td>
                            <td><strong>{{ $query->name }}</strong></td>
                            <td>{{ $query->email }}</td>
                            <td>{{ $query->subject }}</td>
                            <td>{{ $query->created_at->format('M d, Y g:i A') }}</td>
                            <td>
                                <a href="{{ route('admin.queries.show', $query) }}" class="btn-edit">View Message</a>
                                <form action="{{ route('admin.queries.destroy', $query) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this query?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <div style="margin-top: 2rem; display: flex; justify-content: center;">
                {{ $queries->links() }}
            </div>
        @else
            <div style="background: #e8f5e9; padding: 2rem; border-radius: 8px; text-align: center;">
                <p style="color: #2e7d32; font-size: 1.1rem;">📭 No queries received yet</p>
                <p style="color: #666; margin-top: 0.5rem;">User queries from the contact form will appear here</p>
            </div>
        @endif
    </div>
@endsection
