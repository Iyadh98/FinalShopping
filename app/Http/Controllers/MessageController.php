<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    //
    public function addPost(Request $request)
    {
        $message = new Message();
        $message->nom = $request->input('nom');
        $message->tel = $request->input('tel');
        $message->email = $request->input('email');
        $message->texte = $request->input('texte');

        $message->save();
        return redirect('/contact');
    }
    public function getAll()
    {
        $message= Message::all();
        return view('admin/message')->with('message',$message);
    }

}
