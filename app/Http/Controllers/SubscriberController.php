<?php

namespace App\Http\Controllers;
use App\Mail\SendMailSubscribers;
use Illuminate\Support\Facades\Log;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class SubscriberController extends Controller
{
    public function addPost(Request $request)
    {
        $subscriber = new Subscriber();
        $subscriber->email = $request->input('email');
        $subscriber->save();
        return redirect()->back();
    }
    public function delete(){
        $email=Input::get('email');
        $subscriber=Subscriber::where('email','=',$email)->first();

        Log::info($subscriber);
        if ($subscriber==true) {
            Subscriber::where('id',$subscriber->id )->delete();
            return view('unsubscribe');
        }
        else return "doesnt exist";
    }

}
