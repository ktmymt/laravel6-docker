<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Models\Todo::class, 1000)->create();
    }
}
