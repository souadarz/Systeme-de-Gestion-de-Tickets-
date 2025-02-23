<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ticket::insert([
            [
                "title" => "tickt1",
                "description" => "desc1",
                "status" => "in progress",
                "categorie_id" => 1,
                "user_id" => 9
            ],
            [
                "title" => "tickt2",
                "description" => "desc2",
                "status" => "in progress",
                "categorie_id" => 3,
                "user_id" => 11
            ]
        ]);
    }
}
