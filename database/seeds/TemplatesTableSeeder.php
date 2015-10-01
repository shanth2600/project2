<?php

use Illuminate\Database\Seeder;
use App\Models\Template;

class TemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('templates')->delete();

        for($i=0;$i<6;$i++){
            Template::create([
                'url'       => 'assets/templates/P'.($i+1).'.jpg',
                'name'     => 'Template '.$i+1,
            ]);

        }



    }
}
