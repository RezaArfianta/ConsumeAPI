@extends('layouts.main')

@section('container')
    <a href="{{ route('users.index') }}" class="btn btn-secondary mb-3">Back</a>

    @if (session()->has('message'))
        <div class="alert alert-danger">
            {!! session('message') !!}
        </div>
    @endif

    <div class="mt-3">
        <form method="post" action="{{ route('users.update', $user['id']) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">First Name</label>
                <input type="text" name="nama_depan" class="form-control" value="{{ $user['firstName'] }}" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                <input type="text" name="nama_belakang" class="form-control" value="{{ $user['lastName'] }}" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" disabled name="email" value="{{ $user['email'] }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
