<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;
use App\Models\User;
class PostController extends Controller
{
    public function index()
    {
        return view('livewire.index', [
            'posts' => Post::paginate(50),
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store()
    {
        Post::create(array_merge($this->validatePost(), [
            'user_id' => request()->user()->id,
            'thumbnail' => request()->file('thumbnail')->store('thumbnails')
        ]));

        return redirect('/');
    }

    public function edit(Post $post,)
    {
        
        return view('livewire.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        $attributes = $this->validatePost($post);

        if ($attributes['thumbnail'] ?? false) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);

        return back()->with('success', 'Post Updated!');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('success', 'Post has been Deleted!');
    }

    protected function validatePost(?Post $post = null): array
    {
        $post ??= new Post();

        return request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post)],
            'body' => 'required',
        ]);
    }
}
