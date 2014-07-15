<?php

class Post extends \Eloquent {
	protected $fillable = [];

	public function user()
	{
		return $this->belongsTo('User');
	}

	public static function byUsername($username)
	{
		return User::byUsername($username)->posts;
	}

}