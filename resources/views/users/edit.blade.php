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
                <form action="{{ route('users.update', $target_user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <legend>Edit "<b>{{$target_user->firstname}}</b>" </legend>
                    <hr />
                    <div class="form-group">
                        <label for="firstname">firstname</label>
                        <input id="firstname" name="firstname" type="text" class="form-control" value="{{$target_user->firstname}}">
                    </div>
                    <div class="form-group">
                        <label for="lastname">lastname</label>
                        <input id="lastname" name="lastname" type="text" class="form-control" value="{{$target_user->lastname}}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" class="form-control" value="{{$target_user->email}}">
                    </div>

                    <div class="form-group">
                        <label for="birth_date">Birth Date</label>
                        <input type="date" id="birth_date" name="birth_date" class="form-control" value="{{$target_user->birth_date}}">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control" value="{{$target_user->phone}}">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confrim Password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control">
                    </div>
                    <button id="btn-update" class="btn btn float-right">Update User</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
