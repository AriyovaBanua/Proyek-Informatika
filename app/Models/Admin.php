<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admin';
    protected $fillable = ['username', 'password'];
    protected $guard = 'web';
    public function getAuthPassword()
    {
        return $this->password;
    }

    public function validatePassword($plainPassword)
    {
        return \Hash::check($plainPassword, $this->password);
    }
}


