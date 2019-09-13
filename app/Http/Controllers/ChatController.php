<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChatMessage;
use App\Chat;

class ChatController extends Controller
{

	public function sendMessage(Request $request) {

		$username = $request->username;
		$text = $request->text;
//dd($username, $text);
		$chatMessage = new ChatMessage();
		$chatMessage->sender_username = $username;
		$chatMessage->message = $text;
		$chatMessage->save();




	}

	public function isTyping(Request $request){
		$username = $request->username;
		$chat = Chat::find(1);
		//dd($chat);
		if ($chat->user1 == $username) $chat->user1_is_typing = true; else $chat->user2_is_typing = true;
		$chat->save();
	}

	public function notTyping(Request $request){
		$username = $request->username;
		$chat = Chat::find(1);
		if ($chat->user1 == $username) $chat->user1_is_typing = false; else $chat->user2_is_typing = false;
		$chat->save();
	}

	public function retrieveChatMessages(Request $request){
		$username = $request->username;


		//$message = ChatMessage::where('sender_username', '!=', $username)->where('read', '=', false)->first();
		$message = ChatMessage::where('sender_username', '!=', $username)->where('read', '=', false)->first();
		//dd($message);
		//if (! $message) throw;
		if ($message ){
			$message->read = true;
			$message->save();
			return $message->message;
		}
	}

	public function retrieveTypingStatus(Request $request){
		$username = $request->username;

		$chat = Chat::find(1);
		if ($chat->user1 == $username) {
			if ($chat->user2_is_typing) return $chat->user2;
		} else {
			if ($chat->user1_is_typing) return $chat->user1;
		}
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
