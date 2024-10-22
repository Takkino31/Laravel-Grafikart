<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogFilterRequest;
use App\Models\Post;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\View\View;


class BlogController extends Controller
{
    public function index(BlogFilterRequest $request): View
    {
//        dd($request->validated());

//        $validator = Validator::make([
//            'title' => '' ,
//            'content' => 'article validated'
//        ],[
//            'title' =>'required | numeric',
//        ]);

        return view('blog.index', [
            'posts' => Post::paginate(1)
        ]);
    }

/*    public function show (string $slug , Post $post): RedirectResponse | View
    {
//        dd($post);
//        $post = Post::findOrFail($post);
        if ($post->slug !== $slug) {
            return to_route('blog.show', [$slug => $post->slug,'id' => $post->id]);
        }
        return  view('blog.show', ['post' => $post]);
    }*/

    public function show ( Post $post): RedirectResponse | View
    {
        return  view('blog.show', ['post' => $post]);
    }
}
