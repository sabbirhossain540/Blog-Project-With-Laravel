<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag1 = ([
        	'name' => 'News'
        ]);

        $tag2 = ([
        	'name' => 'Speaks'
        ]);

        $tag3 = ([
        	'name' => 'Reading'
        ]);
    }
}
