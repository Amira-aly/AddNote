<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostsController extends Controller
{

    public function index()
    {
        $posts=post::all();
        return view('posts.index',compact('posts'));
    }


    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:200',
            'content' => 'required|max:255',
            'date' => 'required|date',
            'time' => 'required'
        ]);

        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        $new_post = post::create($data);

        session()->flash('success', 'You created new task successfully');
        return redirect()->route('posts.index');
    }


    public function show($id)
    {
        $target_post = post::find($id);

        if (!isset($target_post)) {
            session()->flash('danger', 'User not found !!');
            return redirect()->route('home');
        }

        return view('home', compact('target_post'));
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
