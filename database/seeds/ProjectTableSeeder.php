<?php

use Illuminate\Database\Seeder;


class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->delete();
	    User::create(array(
	        'name'     => 'Asignment',
	        'type' => 'Other',
	        'comments'    => 'test',
	     'terms'    => 'Agree',
	    ));
    }
}
