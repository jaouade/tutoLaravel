<?php namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePostRequest;

use App\User;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	   // User::create(['email'=>'test@test.com','password'=>Hash::make('0000')]);

	    Auth::attempt(['email'=>"test@test.com",'password'=>'0000']);
	    dd(Auth::user());
		$posts = Post::with('category')->get();
		return view('posts.index',compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	    $post = new Post();
        $categories = Category::lists('name','id');
		return view('posts.create',compact('post','categories'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        Post::create($request->all());
        $posts=Post::all();
        return redirect(route('news.index',compact('posts')));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $post = Post::published()->where('id',$id)->first();
        if($post ==null){
            return new Post();
        }
        return $post;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		$categories = Category::lists('name','id');
		$tags =$post->tags()->get();
		return view('posts.edit',compact('post','categories','tags'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param UpdatePostRequest $request
     * @return Response
     */
	public function update($id,UpdatePostRequest $request)
	{
        $post = Post::find($id);
        $post->update($request->all());
        return redirect(route('news.edit',$id));

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
