<?php

namespace Database\Seeders;

use Database\Seeders\Traits\ForeignKey;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
        $this->truncate('users');
        \App\Models\User::factory(10)->create();
        $this->enableForeignKey();
    }
}
