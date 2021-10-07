<?php

namespace App\Http\Controllers;
use App\User;//menggunakan model post
use App\Post;//menggunakan model post
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
      $this->middleware('auth'); //middleware dalam Controller
    }

    public function index()
    {
      return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //validasi data yang akan di input
      $validatedData = $request->validate
      ([
  			'title' => 'required|min:5|max:55', //harus disini max 225 karakter
  			'content' => 'required|min:10', //harus di isi dengan atribute text
        'photo' => 'image|mimes:jpeg,png,jpg,gif|max:5408', //mimes untuk memastikan file max 5mb
		  ]);

  		$id = Auth::user()->id;
  		$user = User::find($id);
  		$content = $request->content;
		  $photo = $request->file('photo');
		  $file = time()."_".$photo->getClientOriginalName();
      //time() get waktu realtime
      //get nama file asli
		  $feed_upload = 'feed';
		  $photo->move($feed_upload, $file);
  		Post::create
      ([
  			'user_id' => $id,
  			'title' => $request->title,
  			'content' => $content,
        'photo' => $file,
  		]);

      return back()->with('sukses data masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
