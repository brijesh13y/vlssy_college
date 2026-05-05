@extends('admin.layout')

@section('page-title', 'Manage Services')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
        <h2 style="color: #003d7a;">Services</h2>
        <a href="{{ route('admin.services.create') }}" class="btn-primary-admin">+ Add New Service</a>
    </div>

    <div class="card">
        @if($services->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Short Description</th>
                        <th>Order</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                        <tr>
                            <td><strong>{{ $service->title }}</strong></td>
                            <td>{{ $service->short_description }}</td>
                            <td>{{ $service->order }}</td>
                            <td>
                                <a href="{{ route('admin.services.edit', $service) }}" class="btn-edit">Edit</a>
                                <form action="{{ route('admin.services.destroy', $service) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete this service?');">
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
            <p style="color: #666; text-align: center; padding: 2rem;">No services found. <a href="{{ route('admin.services.create') }}">Create one now</a></p>
        @endif
    </div>
@endsection