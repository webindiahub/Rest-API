<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model {

    protected $table = 'users';

    protected $fillable = ['first_name', 'last_name', 'email', 'gender', 'bio'];

    protected $hidden = ['id', 'updated_at'];


}