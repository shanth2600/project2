<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create([
        	'name'		=> 'test',
        	'email'		=> 'test@doodle.com',
        	'password'	=> Hash::make('test')
	    ]);

    }
}
