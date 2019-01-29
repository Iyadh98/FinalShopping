<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SubscriberController extends Controller
{
    public function addPost(Request $request)
    {
        $subscriber = new Subscriber();
        $subscriber->email = $request->input('email');
        $subscriber->save();
        return redirect()->back();
    }
    public function addGetUn(){
        $email=Input::get('email');
        $subscriber=Subscriber::where('email','=',$email)->first();

        Log::info($subscriber);
        if ($subscriber==true) {
            Subscriber::where('id',$subscriber->id )->delete();
            return view('unsubscribe');
        }
        else return "doesnt exist";
    }
    public function delete($id){


    }
}
