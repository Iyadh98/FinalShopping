<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function addPost(Request $request)
    {
        $subscriber = new Subscriber();
        $subscriber->email = $request->input('email');
        $subscriber->save();
        return redirect('index');
    }
    public function addGetUn(){
        $sub=Subscriber::all();
        return view('unsubscribe')->with('sub',$sub);
    }
    public function delete($id){

        Subscriber::where('id', $id)->delete();
        return redirect('index');
    }
}
