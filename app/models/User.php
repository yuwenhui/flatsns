<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	protected $table = 'users';
	protected $hidden = array('password');

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	public function getDateFormat()
	{
		return 'U';
	}
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	/**
	 * getUserOne
	 *
	 * @return void
	 * @author
	 **/
	public function getUserOne($id)
	{
		$user = $this->find($id);
		$user->create = $user->created_at->diffForHumans();
		return $user;
	}

	public function setPasswordAttribute($value)
	{
		$this->attributes['password'] = Hash::make($value);
	}

	public function setUsernameAttribute()
	{
		$username = ($this->username) ? $this->username : preg_replace('/@.*/', '', $this->email);
		$this->attributes['username'] = $username;
	}

	/**
	 * getUserById
	 *
	 * @return void
	 * @author
	 **/
	public function getUserById($uid)
	{
		$user = $this->where('id', '=', $uid)->first();
		$user->avatar = ($user->avatar) ? $user->avatar : asset('img/avatar.jpg');
		return $user;
	}


	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}