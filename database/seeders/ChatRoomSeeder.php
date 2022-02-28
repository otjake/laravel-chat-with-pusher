<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChatRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ChatRoom::factory()->count(2)->create();

    }
}
