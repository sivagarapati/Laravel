<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag=new \App\Tag();
        $tag->name='Tutorial';
        $tag->save();

        $tag=new \App\Tag();
        $tag->name='Industry News';
        $tag->save(); 
    }
}
