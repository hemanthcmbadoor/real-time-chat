<?php

namespace App\Http\Controllers;

use App\Events\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
        $time = Carbon::now();
        event(
            new Message(
                        $request->input('username'), 
                        $request->input('message'),
                        $time->format('d M h:i:s A')
                )
        );

        return ['success' => true];
    }
}
