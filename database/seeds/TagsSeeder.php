<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['kevin Hart', 'Leonardo Di Caprio', 'Dwayne Jonson', 'Daniel Radcliffe', 'Emma Watson'];
        foreach ($tags as $tag) {
            $new_tag = new Tag();
            $new_tag->name = $tag;
            $new_tag->save();
        }
    }
}
