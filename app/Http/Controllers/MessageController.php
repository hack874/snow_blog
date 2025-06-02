<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function sendMessage(Room $room ,Request $request)
    {
       $user = Auth::user();
       $message = new Message();
       $message->message = $request->message;
       $message->user_id = $request->user_id;
       $message->user_id = Auth::user()->id;
       $message->room_id = $request->room_id;
       $message->save();
       event(new MessageChange($message));
       return view('messages/sendMessage')->with(['room' => $room->get()
]);
    }
}
