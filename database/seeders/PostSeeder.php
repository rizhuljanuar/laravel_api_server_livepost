<?php

namespace Database\Seeders;

use App\Models\Post;
use Database\Seeders\Traits\ForeignKey;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    use TruncateTable, ForeignKey;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKey();
        $this->truncate('posts');
        Post::factory(3)->create();
        $this->disableForeignKey();
    }
}
