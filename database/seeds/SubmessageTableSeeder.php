<?php

use Illuminate\Database\Seeder;
use App\Submessage;

class SubmessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $message=new Submessage();
        $message->message = ' ';
        $message->save();
    }
}
