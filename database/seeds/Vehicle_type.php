<?php
/**
 * Created by PhpStorm.
 * User: himanshu
 * Date: 8/18/2018
 * Time: 3:03 PM
 */

use Illuminate\Database\Seeder;
use App\Models\vehicles;

class Vehicle_type extends seeder
{
    public function run()
    {
        vehicles::insert([  'vehicle_name' => 'Inbound' ]);
        vehicles::insert([  'vehicle_name' => 'Outbound' ]);
    }
}