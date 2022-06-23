@extends('layouts.app')

@section('content')
<div class="row justify-content-center">



    <div class="col-md-8">
        <div class="card" id="info-card">
            <div class="card-header">
                <b>
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                    Info
                </b>
            </div>
            <div class="card-body">
                <table class="table table-striped table-sm">
                    <tr>
                        <td>firstname</td>
                        <td>{{$target_user->firstname}}</td>
                    </tr>
                    <tr>
                        <td>lastname</td>
                        <td>{{$target_user->lastname}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{$target_user->email}}</td>
                    </tr>
                    <tr>
                        <td>Birth Date</td>
                        <td>{{$target_user->birth_date}}</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>{{$target_user->phone}}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="card" id="edit-card" style="display: none !important">
            <div class="card-header">
                <b>
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    Edit
                </b>
            </div>
            <div class="card-body">
                <div  id="loading-spin" style="display: none">
                    <div class="d-flex justify-content-center">
                        <div class="spinner-border" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>

                <div style="display: none" id="err-msg-container" class="alert alert-danger">

                </div>

                <div style="display: none" id="success-msg-container" class="alert alert-success">
                    You updated user successfully !!
                </div>

                <form>
                    <div class="form-group">
                        <label for="firstname">firstname</label>
                        <input type="text" name="firstname" id="firstname"class="form-control" value="{{$target_user->firstname}}">
                    </div>
                    <div class="form-group">
                        <label for="lastname">lastname</label>
                        <input type="text" name="lastname" id="lastname"class="form-control" value="{{$target_user->lastname}}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{$target_user->email}}">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="phone" name="phone" id="phone" class="form-control" value="{{$target_user->phone}}">
                    </div>

                    <div class="form-group">
                        <label for="birth_date">date</label>
                        <textarea name="birth_date" id="birth_date" class="form-control">{{$target_user->birth_date}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confrim Password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control">
                    </div>


                    <button id="edit-account-data" class="btn btn-warning float-right mt-3">Edit Acount Data</button>
                </form>
            </div>
        </div>

    </div>
</div>



@endsection
