<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    public function run()
    {
        Room::factory()->has(Message::factory()->count(3))->count(3)->create();
    }
}
