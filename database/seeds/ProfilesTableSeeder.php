<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->delete();

        $users = User::all();

        foreach($users as $user){
            Profile::create([
                'display_name' => 'The Real Doodle Maestro',
                'user_id'  => $user->id
            ]);
        }

    }
}
