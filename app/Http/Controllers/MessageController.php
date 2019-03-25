<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function create(Request $request){

        // $_POST['title'] can also be used also to extract request parameters 
        $message = new Message();
        $message->title = $request->title;
        $message->content = $request->content;
        $message->save();

        return redirect('/');
        
    }

    public function view($id){

       $message = Message::find($id);
       return view('message', ['message' => $message]);

    }
}
