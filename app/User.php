<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name','mobile_number','email','creted_by','updated_by','user_type','user_status','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	

    public function isSuperadmin()
    {	
       return ($this->user_type==4 ? $this->user_type : 0);
    }
	
	public function isAdmin()
    {	
       return ($this->user_type==3 ? $this->user_type : 0);
    }
	
	public function isSeller()
    {	
       return ($this->user_type==2 ? $this->user_type : 0);
    }
	
	public function isUser()
    {	
       return ($this->user_type==1 ? $this->user_type : 0);
    }
}
