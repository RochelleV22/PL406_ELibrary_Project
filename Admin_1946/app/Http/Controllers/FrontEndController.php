<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Stroage;

use App\Models\books;

use App\Models\magazines;

use App\Models\audios;

use App\Models\videos;

use App\Models\contacts;
use DB;

class FrontEndController extends Controller
{
   
    public function Index(){

      return view('index');
    }
    public function User_Index(){

      return view('user_index');
    }
   
    public function signin()
    {
      return view('auth.login');
    }
    public function signup()
    {
      return view('auth.register');
    }
     public function logout()
    {
      return view('layouts.books');
    }

    function services()
    {
      return view('layouts.services');
    }
     function download()
    {
        return view('layouts.download');
    }
     function news()
    {
        return view('layouts.news');
    }
     function books_media()
    {
        return view('layouts.books_media');
    }
    function books()
    {
        return view('layouts.books');
    }
  
    function magazine()
    {
        return view('layouts.magazine');
    }
   
      function audio()
    {
        return view('layouts.audio');
    }
   
      function video()
    {
        return view('layouts.video');
    }
   

    //Unregistered User View 
    /////////////////////////////////////////////////////////////////////////////////////////////////
    //upload and download a book routes
   //the book page
   public function show(){

    $data=books::all();
    return view('layouts.showbooks',compact('data'));
   }
   //to view a book
   public function view_book($id){
    $data=books::find($id);
    return view('layouts.books',compact('data'));
   }
   //to show the magazine page
    public function m_show(){
    $data=magazines::all();
    return view('layouts.showmagazines',compact('data'));
   }
    //to view a magazine
   public function view_magazine($id){
    $data=magazines::find($id);
    return view('layouts.magazine',compact('data'));
   }
  //upload and download a Audio 

   //to show audio page
     public function a_show(){
    $data=audios::all();
    return view('layouts.showaudio',compact('data'));
   }
   //to listen to an audio
    public function view_audio($id){
    $data=audios::find($id);
    return view('layouts.audio',compact('data'));
   }

  //upload and download a Videos 

    public function v_upload()
    {

      return view('upload_download.v_upload');
    }
    public function v_store(Request $request)
    {
      $data=new videos();

      $file=$request->file;
      $filename=time().'.'.$file->getClientOriginalExtension();

      $request->file->move('files',$filename);
      $data->file=$filename;

      $data->name=$request->name;
      $data->description=$request->description;
      $data->email=$request->email;
      $data->save();
      return redirect()->back();
   }
   //to show video page
   public function v_show(){
    $data=videos::all();
    return view('layouts.showvideo',compact('data'));
   }
   //to watch a video
    public function view_video($id){
    $data=videos::find($id);
    return view('layouts.video',compact('data'));
   }
   //registered User View 
   /////////////////////////////////////////////////////////////////////////////////////////////////
    function user_books()
    {
         $data=books::all();
         return view('registered_user.showbooks',compact('data'));
    }
    function user_magazine()
    {
        $data=magazines::all();
         return view('registered_user.showmagazines',compact('data'));
    }
    function user_audio()
    {
         $data=audios::all();
         return view('registered_user.showaudio',compact('data'));
    }
    function user_video()
    {
        $data=videos::all();
         return view('registered_user.showvideo',compact('data'));
    }

   public function download_book(Request $request,$file)
   {
    
    return response()->download(public_path('files/' .$file));
   }
  //for magazine

   public function download_magazine(Request $request,$file){
    
    return response()->download(public_path('files/' .$file));
   }
   /////for audio

   public function download_audio(Request $request,$file){
    
    return response()->download(public_path('files/' .$file));
   }
   //////for video

   public function download_video(Request $request,$file){
    
    return response()->download(public_path('files/' .$file));
   }

//contact us page to save all user messages

  public function get_contact(){

    return view('layouts.contact');
  }
  public function save_contact(Request $request){

      $data=new contacts();
      $data->first_name=$request->first_name;
      $data->last_name=$request->last_name;
      $data->email=$request->email;
      $data->phone=$request->phone;
      $data->message=$request->message;
      $data->save();
      return redirect()->back();
   }

//search by all users
public function search(Request $Request)
{
  $search = $Request->get('search');
  $books = DB::table('books')->where('name', 'like' ,'%'.$name.'%')->paginate(5);
  return view('index' , ['books'=>$books]);
}
}
