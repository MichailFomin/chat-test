<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
	protected $table='chats';

	protected $fillable = [
		'user1', 'user2', 'user1_is_typing', 'user2_is_typing',
	];
}
