<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        // $this->call('UsersTableSeeder');
=======
        $this->call(UsersSeeder::class);
>>>>>>> 69bb892c1e67a6e7807a4ce4a74f38fa79b2ce46
    }
}
