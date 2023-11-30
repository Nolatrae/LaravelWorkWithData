<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        // $post = Post::find(1);
        // $posts = Post::all();
        // //dd($post->title);
        // dump($posts);
        // foreach ($posts as $post) {
        //     dump($post->title);
        // }
        // dump(Post::where('likes', 20)->first());
        // $posts = Post::all();
        // dump($posts);

        $posts = Post::all();
        return view("post.index", compact('posts'));
    }
    
    
    public function create() {
        // $postsArr = [[
        //     'title' => 'bla bla bla',
        //     'content' => 'bla bla bla bla',
        //     'image' => "image.png",
        //     'likes' => 20,
        //     'is_published' => 1,
        // ],
        // [
        //     'title' => 'second bla bla bla',
        //     'content' => 'second bla bla bla bla',
        //     'image' => "secondimage.png",
        //     'likes' => 330,
        //     'is_published' => 1,
        // ]];
        // Post::create([
        //         'title' => 'bla bla bla',
        //         'content' => 'bla bla bla bla',
        //         'image' => "image.png",
        //         'likes' => 20,
        //         'is_published' => 1,
        // ]);
        // foreach($postsArr as $item) {
        //     dump($item);
        //     Post::create($item);
        // }

        // dd('created');

            return view('post.create');

    }

    public function store() {
        $data = request()->validate([
            'title'=> '',
            'content'=> '',
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post) {

        return view('post.show', compact('post'));
    }

    public function edit(Post $post){
        return view('post.edit', compact('post'));
    }

    public function update(Post $post) {
        // $post = Post::find(6);
        // $post->update([
        //     'title' => 'update',
        //     'content' => 'update'
        // ]);
        // dd('update');
    
        $data = request()->validate([
            'title'=> '',
            'content'=> '',
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);

    }

    public function delete(){
        $post = Post::find(2);
        dump($post);
        $post -> delete();
        dd('deleted');
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('post.index');
    }
}
