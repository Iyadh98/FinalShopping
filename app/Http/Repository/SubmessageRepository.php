<?php
/**
 * Created by PhpStorm.
 * User: iyadh
 * Date: 2019-01-29
 * Time: 21:56
 */

namespace App\Http\Repository;

use App\Submessage;
use Illuminate\Http\Request;
class SubmessageRepository
{
    public function add(Request $request)
    {
        $message = new Submessage();
        $message->message = $request->input('message');

        $message->save();

        return $message;
    }

    public function getById($id)
    {
        return Submessage::find($id);
    }

    public function edit(Request $request){
        $message=$this->getById($request->input('id'));

            $message->message = $request->input('message');
            $message->update();
            $message = $this->getById($message->id);
            return $message;


    }
    public function getAll()
    {
        return Submessage::all();
    }

}