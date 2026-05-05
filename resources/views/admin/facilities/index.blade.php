@extends('admin.layout')

@section('page-title', 'Manage Facilities')

@section('content')
    <div class="card">
        <h2>Facilities</h2>
        <a href="{{ route('admin.facilities.create') }}" class="btn-primary-admin" style="margin-bottom: 1.5rem;">+ Add New Facility</a>

        @if($facilities->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Order</th>
                        <th>Icon</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($facilities as $facility)
                        <tr>
                            <td><strong>{{ $facility->order }}</strong></td>
                            <td style="font-size: 1.5rem;">{{ $facility->icon }}</td>
                            <td><strong>{{ $facility->title }}</strong></td>
                            <td>{{ substr($facility->description, 0, 50) }}...</td>
                            <td>
                                <a href="{{ route('admin.facilities.edit', $facility) }}" class="btn-edit">Edit</a>
                                <form action="{{ route('admin.facilities.destroy', $facility) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure?');">
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
            <p style="color: #666; margin-top: 1rem;">No facilities yet. <a href="{{ route('admin.facilities.create') }}">Create one</a></p>
        @endif
    </div>
@endsection
