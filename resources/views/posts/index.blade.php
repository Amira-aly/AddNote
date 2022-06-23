@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div  class="col-10">
                        <div><h1>all tasks user</h1></div>
                        <div class="col-10" style="margin-top: -34px; text-align: right;">
                            <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm ">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                        </div>

                    </div>
                </div>



                <div class="card-body">
                    <div class="col-md-4 justify-content-center">
                        <div class="card" >
                            @foreach($posts as $post)
                            <div class="card-col-2">
                                <div class="card-header">
                                    <h1 style="text-align: center;">{{$post->title}}</h1>
                                </div>
                                <div class="card-body">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>content:</td>
                                                <td style="text-align: center;">{{$post->content}}</td>
                                            </tr>
                                            <tr>
                                                <td>date:</td>
                                                <td style="text-align: center;">{{$post->date}}</td>
                                            </tr>
                                            <tr>
                                                <td>time:</td>
                                                <td style="text-align: center;">{{$post->time}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
