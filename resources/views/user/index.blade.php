@extends('layouts.main')

@section('container')
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Add</a>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {!! session('message') !!}
        </div>
    @endif

    <div class="table-responsive mt-3">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $user['firstName'] }}</td>
                        <td>{{ $user['lastName'] }}</td>
                        <td class="d-flex gap-2">
                            <a href="{{ route('users.edit', $user['id']) }}" class="btn btn-warning">Edit</a>
                            <form method="POST" action="{{ route('users.destroy', $user['id']) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>No Record(s) Found!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
