@extends('admin.layout')

@section('page-title', 'View Query - ' . $query->subject)

@section('content')
    <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
            <h2>{{ $query->subject }}</h2>
            <div>
                @if(!$query->is_read)
                    <span style="background: #dc3545; color: white; padding: 0.5rem 1rem; border-radius: 20px; font-weight: 600; margin-right: 1rem;">🔔 NEW MESSAGE</span>
                @endif
                <a href="{{ route('admin.queries.index') }}" class="btn-primary-admin" style="background: #6c757d;">← Back to Queries</a>
            </div>
        </div>

        <div style="background: #f8f9fa; padding: 1.5rem; border-radius: 8px; margin-bottom: 2rem;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 1.5rem;">
                <div>
                    <h4 style="color: #003d7a; margin-bottom: 0.5rem;">Name</h4>
                    <p style="color: #333; font-size: 1.1rem;">{{ $query->name }}</p>
                </div>
                <div>
                    <h4 style="color: #003d7a; margin-bottom: 0.5rem;">Email</h4>
                    <p style="color: #0066cc;">
                        <a href="mailto:{{ $query->email }}" style="color: #0066cc; text-decoration: none;">{{ $query->email }}</a>
                    </p>
                </div>
                <div>
                    <h4 style="color: #003d7a; margin-bottom: 0.5rem;">Phone</h4>
                    <p style="color: #333; font-size: 1.1rem;">
                        <a href="tel:{{ $query->phone }}" style="color: #0066cc; text-decoration: none;">{{ $query->phone }}</a>
                    </p>
                </div>
                <div>
                    <h4 style="color: #003d7a; margin-bottom: 0.5rem;">Received On</h4>
                    <p style="color: #333; font-size: 1.1rem;">{{ $query->created_at->format('M d, Y g:i A') }}</p>
                </div>
            </div>
        </div>

        <div style="background: #fffbf0; padding: 1.5rem; border-left: 4px solid #ffc107; border-radius: 4px; margin-bottom: 2rem;">
            <h4 style="color: #003d7a; margin-bottom: 1rem;">Message</h4>
            <p style="color: #333; line-height: 1.6; white-space: pre-wrap;">{{ $query->message }}</p>
        </div>

        <div style="display: flex; gap: 1rem;">
            <form action="{{ route('admin.queries.destroy', $query) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this query?');" style="flex: 1;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-danger" style="width: 100%; padding: 0.8rem;">🗑️ Delete This Query</button>
            </form>
            <a href="{{ route('admin.queries.index') }}" class="btn-primary-admin" style="background: #6c757d; flex: 1; text-align: center; padding: 0.8rem;">← Back to List</a>
        </div>
    </div>

    <div class="card" style="margin-top: 2rem;">
        <h3 style="color: #003d7a; margin-bottom: 1rem;">Quick Actions</h3>
        <p style="color: #666; margin-bottom: 1rem;">To respond to this inquiry, you can:</p>
        <ul style="color: #666; line-height: 1.8;">
            <li>📧 Reply directly to: <strong>{{ $query->email }}</strong></li>
            <li>📞 Call them at: <strong>{{ $query->phone }}</strong></li>
            <li>💬 Follow up with additional information about: <strong>{{ $query->subject }}</strong></li>
        </ul>
    </div>
@endsection
