<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model {

    protected $table = 'session';

    protected $fillable = ['user_id', 'session_id', 'ip_address', 'user_agent', 'device_token'];

    protected $hidden = ['id', 'created_at', 'updated_at'];

}