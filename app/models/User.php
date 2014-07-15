<?php

class User extends \Eloquent {
	protected $fillable = [];


	public function posts()
	{
		return $this->hasMany('Post');
	}

	public static function byUsername($username)
	{
		return static::whereUsername($username)->first();
	}
}