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
                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf
                    <legend>Create New task</legend>
                    <hr />
                    <div class="form-group">
                        <label for="title">title</label>
                        <input id="title" name="title" type="text" class="form-control" value="{{old('title')}}">
                    </div>

                    <div class="form-group">
                        <label for="content">content</label>
                        <input id="content" name="content" type="text" class="form-control" value="{{old('content')}}">
                    </div>

                    <div class="form-group">
                        <label for="date"> Date</label>
                        <input type="date" id="date" name="date" class="form-control" value="{{old('date')}}">
                    </div>

                    <div class="form-group">
                        <label for="time">time</label>
                        <input type="time" id="time" name="time" class="form-control" value="{{old('time')}}">
                    </div>


                    <button id="btn-submit" class="btn btn float-right">Create New task</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
