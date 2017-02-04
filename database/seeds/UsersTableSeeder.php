<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			factory('App\Models\Admin',3)->create([
				'password' => bcrypt('111111')
			]);
    }
}
