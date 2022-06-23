@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div id="title" class="col-6">
                    Users
                </div>
                <div  class="col-6 text-right">
                    <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-user-plus" style="font-size:24px;"></i>
                    </a>
                </div>
            </div>

            <div class="card-body" style=" height: 400px;">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>firstname</th>
                            <th>lastname</th>
                            <th>email</th>
                            <th>date</th>
                            <th>phone</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->firstname}}</td>
                            <td>{{$user->lastname}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->birth_date}}</td>
                            <td>{{$user->phone}}</td>
                            <td>
                                <a class="btn btn-info btn-sm" href="{{route('users.show', $user->id)}}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                                <form style="display: inline" action="{{route('users.destroy', $user->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger">
                                        <i class="fa fa-user-times" style="font-size:14px"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
