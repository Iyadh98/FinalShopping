<?php

namespace App\Http\Controllers;

use App\Http\Repository\SubmessageRepository;
use Illuminate\Http\Request;
use App\Subscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailSubscribers;
class SubmessageController extends Controller
{
    protected $submessageRepository;


    function __construct(SubmessageRepository $submessageRepository)
    {
        $this->submessageRepository = $submessageRepository;

    }
    public function addPost(Request $request)
    {
        $sub = $this->submessageRepository->add($request);
        return redirect('admin');
    }
    public function editGet(){
        $submessage=$this->submessageRepository->getAll();
        return view('subscriberMessage')->with('submessage',$submessage);
    }
    public function editGetAdmin($id){
        if (!$submessage=$this->submessageRepository->getById($id)) {
            return response()->json(['error' => 'categorie not found'], 404);
        }

        return view('admin/emailSubscriber')->with('submessage',$submessage);
    }

    public function editPost(Request $request){
        $message=$this->submessageRepository->edit($request);
        $submessage=$this->submessageRepository->getAll();
        $subscribers=Subscriber::all();
        foreach ($subscribers as $subscriber){
            Mail::to($subscriber->email)->send(new SendMailSubscribers($submessage));
        }
        return redirect()->back();
    }
}
