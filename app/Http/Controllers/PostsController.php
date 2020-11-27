<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Posts;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.posts.new-post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        
        if ($request->hasFile('post_img')) {
            if ($request->file('post_img')->isValid()) {

                // validate img
                $request->validate([
                    'post_img' => 'image|mimes:jpeg,png,jpg|max:2048',
                ]);
                #TODO validate also title, price, desc and so on.

                // fetching img file name
                $fileName = $request->post_img->getClientOriginalName();
                $request->post_img->storeAs('post_images', $user->id . '/' . $fileName, 'public');
                
                // sending data to db 'posts'
                Posts::create([
                    'user_id' => $request->input('id'),
                    'post_title' => $request->input('post_title'),
                    'post_price' => $request->input('post_price'),
                    'post_desc' => $request->input('post_desc'),
                    'post_img' => $fileName,
                ]);

                return back()->with('status', 'Публикация отправлена');
            }
        }
        
        // $validated = $request->validate([
        //     'post_img' => 'image|mimes:jpeg,png,jpg|max:2048'
        // ]);

        // $extension = $request->image->extension();

        // $request->image->storeAs('/public', $validated['name'].".".$extension);
        // $url = Storage::url($validated['name'].".".$extension);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Posts::find($id);
        return view('profile.posts.post')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    // toggle boolean
    public function toggleLike() 
    {
        $this->flag = !$this->flag;
        return $this;
    }

    /**
     * Handle the like on post...
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postLiked(Request $request, Posts $post)
    {
        // dd($request->user());
        // dd($request->post->id);
        dd($post->likes());
        
        // $post->likes()->create([
        //     'user_id' => $request->user()->id,
        //     'post_id' => $request->$post,
        // ]);
        
            
        return back();


        // $post->toggleLike()->save();
        // return response()->json([
        //     'success' => false,
        //     'message' => __('site.form_with_error'),
        //     'errors' => $errors,
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // When user deletes a post, this is how you remove the picture from the storage also:
        // Storage::delete('/public/post_images' . $post->post_img); #TODO !!!$post has to be in foreach loop.!!!
        // Source ---> https://www.youtube.com/watch?v=tmvsWRurkhQ&list=PLe30vg_FG4OSCTUv3XIkwH--cK2D7rfJJ&index=18
    }
}