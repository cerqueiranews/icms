<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$user=Usuario::model()->findByAttributes(array('login'=>md5($this->username)));
		if(is_null($user))
		{
			$this->errorCode=self::ERROR_USERNAME_INVALID;
			return false;
		}	
		else if($user->senha !== md5($this->password))
		{
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
			return false;
		}
		else
		{
			$_SESSION['autenticado'] = TRUE;
			$this->id = $user->id;
			$this->setState('roles', strtolower($user->tipo->nome)); 
			$this->errorCode=self::ERROR_NONE;
			return true;
		}
	}
	
	public function getId(){
        return $this->id;
    }

}