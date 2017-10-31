<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('home');
    }

    public function send(Request $request){

        $name=$request->name;
        $email=$request->email;
        $message=$request->message;
        $Comment=new Comment($name,$email,$message);

        $this->insertOnDB($Comment);

        $request->validate([
        'name' => 'required|min:2',
        'email' => 'required|email|unique:users',
        'message' => 'required|min:4',

        ]);

        return redirect('/');

    }

    private function insertOnDB(Comment $comment){
        DB::table("comments")->insert([
           "name"=>$comment->getName(),
           "email"=>$comment->getEmail(),
           "message"=>$comment->getMessage()
        ]);

    }

}
