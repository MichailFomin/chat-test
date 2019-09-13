<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    protected $table='chat_messages';

	protected $fillable = [
		'sender_username', 'message', 'read',
	];
}
