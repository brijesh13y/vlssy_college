@extends('admin.layout')

@section('page-title', 'Manage Educational Phases')

@section('content')
    <div class="card">
        <h2>Educational Phases</h2>
        <a href="{{ route('admin.phases.create') }}" class="btn-primary-admin" style="margin-bottom: 1.5rem;">+ Add New Phase</a>

        @if($phases->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Order</th>
                        <th>Icon</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Features</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($phases as $phase)
                        <tr>
                            <td><strong>{{ $phase->order }}</strong></td>
                            <td style="font-size: 1.5rem;">{{ $phase->icon }}</td>
                            <td><strong>{{ $phase->title }}</strong></td>
                            <td>{{ substr($phase->description, 0, 50) }}...</td>
                            <td>
                                @foreach($phase->features as $feature)
                                    <span style="display: inline-block; background: #e6f0ff; color: #0066cc; padding: 0.3rem 0.6rem; border-radius: 4px; font-size: 0.85rem; margin-right: 0.3rem; margin-bottom: 0.3rem;">{{ $feature }}</span>
                                @endforeach
                            </td>
                            <td>
                                <a href="{{ route('admin.phases.edit', $phase) }}" class="btn-edit">Edit</a>
                                <form action="{{ route('admin.phases.destroy', $phase) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure?');">
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
            <p style="color: #666; margin-top: 1rem;">No educational phases yet. <a href="{{ route('admin.phases.create') }}">Create one</a></p>
        @endif
    </div>
@endsection
