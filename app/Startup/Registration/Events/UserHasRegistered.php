<?php namespace Startup\Registration\Events;

use Startup\Users\User;

class UserHasRegistered{

	public $user;

	function __construct(User $user){
		$this->user = $user;
	}
}