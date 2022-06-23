@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <legend>Create New User</legend>
                    <hr />
                    <div class="form-group">
                        <label for="firstname">firstname</label>
                        <input id="firstname" name="firstname" type="text" class="form-control" value="{{old('firstname')}}">
                    </div>

                    <div class="form-group">
                        <label for="lastname">lastname</label>
                        <input id="lastname" name="lastname" type="text" class="form-control" value="{{old('lastname')}}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" class="form-control" value="{{old('email')}}">
                    </div>

                    <div class="form-group">
                        <label for="birth_date">Birth Date</label>
                        <input type="date" id="birth_date" name="birth_date" class="form-control" value="{{old('birth_date')}}">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control" value="{{old('phone')}}">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confrim Password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control">
                    </div>
                    <button id="btn-submit" class="btn btn float-right">Create New User</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
