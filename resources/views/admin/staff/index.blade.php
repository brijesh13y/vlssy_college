@extends('admin.layout')

@section('page-title', 'Manage Staff')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
        <h2 style="color: #003d7a;">Staff Members</h2>
        <a href="{{ route('admin.staff.create') }}" class="btn-primary-admin">+ Add New Member</a>
    </div>

    <div class="card">
        @if($staffMembers->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Qualification</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($staffMembers as $member)
                        <tr>
                            <td><strong>{{ $member->name }}</strong></td>
                            <td>{{ $member->position }}</td>
                            <td>{{ $member->qualification }}</td>
                            <td>{{ $member->email ?? 'N/A' }}</td>
                            <td>
                                <a href="{{ route('admin.staff.edit', $member) }}" class="btn-edit">Edit</a>
                                <form action="{{ route('admin.staff.destroy', $member) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete this member?');">
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
            <p style="color: #666; text-align: center; padding: 2rem;">No staff members found. <a href="{{ route('admin.staff.create') }}">Add one now</a></p>
        @endif
    </div>
@endsection