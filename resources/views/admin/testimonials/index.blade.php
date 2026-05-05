@extends('admin.layout')

@section('page-title', 'Manage Testimonials')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
        <h2 style="color: #003d7a;">Testimonials</h2>
        <a href="{{ route('admin.testimonials.create') }}" class="btn-primary-admin">+ Add New Testimonial</a>
    </div>

    <div class="card">
        @if($testimonials->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Client Name</th>
                        <th>Company</th>
                        <th>Rating</th>
                        <th>Featured</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($testimonials as $testimonial)
                        <tr>
                            <td><strong>{{ $testimonial->client_name }}</strong></td>
                            <td>{{ $testimonial->company }}</td>
                            <td>
                                @for($i = 0; $i < $testimonial->rating; $i++)
                                    ★
                                @endfor
                            </td>
                            <td>
                                @if($testimonial->is_featured)
                                    <span style="background: #28a745; color: white; padding: 0.3rem 0.8rem; border-radius: 4px; font-size: 0.9rem;">Yes</span>
                                @else
                                    <span style="background: #ddd; color: #666; padding: 0.3rem 0.8rem; border-radius: 4px; font-size: 0.9rem;">No</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn-edit">Edit</a>
                                <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete this testimonial?');">
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
            <p style="color: #666; text-align: center; padding: 2rem;">No testimonials found. <a href="{{ route('admin.testimonials.create') }}">Add one now</a></p>
        @endif
    </div>
@endsection