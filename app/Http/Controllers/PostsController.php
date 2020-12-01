<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Posts;
use App\Models\Like;
use Illuminate\Http\Client\Response;

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
        // ******* WORKING DEMO **************
        // $user = Auth::user();

        // // generating random ID of 5 chars for folder name
        // // so the structure will be: (user id folder) -> (unique id from post) -> images
        // $folderID = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 5);

        // if ($request->hasFile('post_img') && $request->file('post_img')->isValid()) {
        //     // validate img
        //     $request->validate([
        //         'post_img' => 'required|mimes:jpeg,png,jpg|max:2048',
        //         'post_title' => 'required|max:100',
        //         'post_desc' => 'required|max:500'
        //     ]);

        //     // fetching img file name & setting location
        //     $fileName = $request->post_img->getClientOriginalName();
        //     $request->post_img->storeAs('post_images', $user->id . '/' . $folderID . '/' . $fileName, 'public');

        //     // sending data to db 'posts'
        //     Posts::create([
        //         'user_id' => $user->id,
        //         'post_title' => $request->input('post_title'),
        //         'post_price' => $request->input('post_price'),
        //         'post_desc' => $request->input('post_desc'),
        //         'post_img' => $fileName,
        //     ]);

        //     return back()->with('status', 'Публикация отправлена');
        // }  else {
        //     return back()->with('status', 'Что-то не так...');
        // }
        // ******* END WORKING DEMO 
        $path = storage_path('tmp/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = uniqid() . '_' . trim($file->getClientOriginalName());

        $file->move($path, $name);

        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
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
        $post->likes()->create([
            'user_id' => Auth::user()->id,
            'post_id' => $request->input('post_id'),
        ]);
        return back();
    }

    /**
     * Handle the unlike on post...
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postUnliked(Request $request, Posts $post)
    {
        $request->user()->likes()->where('post_id', $post->id)->delete();
        return back();
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
