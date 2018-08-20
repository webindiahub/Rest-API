<?php
/**
 * Created by PhpStorm.
 * User: himanshu
 * Date: 8/18/2018
 * Time: 3:27 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vehicles extends Model
{
    protected $table = 'unloading_vehicle_type';

    protected $fillable = ['vehicle_name','created_at'];

    protected $hidden = ['id', 'updated_at'];


}