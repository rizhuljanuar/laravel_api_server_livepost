<?php

namespace Database\Seeders;

use App\Models\Comment;
use Database\Seeders\Traits\ForeignKey;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
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
        $this->truncate('comments');
        Comment::factory(3)->create();
        $this->disableForeignKey();
    }
}
