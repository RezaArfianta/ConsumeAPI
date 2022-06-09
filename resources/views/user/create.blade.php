@extends('layouts.main')

@section('container')
    <a href="{{ route('users.index') }}" class="btn btn-secondary mb-3">Back</a>

    @if (session()->has('message'))
        <div class="alert alert-danger">
            {!! session('message') !!}
        </div>
    @endif

    <div class="mt-3">
        <form method="post" action="{{ route('users.store') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">First Name</label>
                <input type="text" name="nama_depan" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                <input type="text" name="nama_belakang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
