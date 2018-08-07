<?php

use Illuminate\Database\Seeder;
use App\Models\Users;
/**
 * Class UsersSeeder
 */
class UsersSeeder extends Seeder {
    /**
     * Create user record
     */
    public function run() {
        Users::insert([
            'first_name' => 'rahul',
            'last_name' => 'wih',
            'email' => 'rahul@wih.com',
            'gender' => 'male',
            'bio' => 'Hello World'
        ]);
    }
}