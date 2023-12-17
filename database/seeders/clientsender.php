<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;

class clientsender extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = collect(
            [
                [
                    "lawyer_id" => "1",
                    "client_id" => "1",
                    "day" => "Thursday",
                    "time" => "8:00AM - 9:00AM"
                ],
                [
                    "lawyer_id" => "2",
                    "client_id" => "2",
                    "day" => "Wednesday",
                    "time" => "9:00AM - 10:00AM"
                ],
                [
                    "lawyer_id" => "1",
                    "client_id" => "3",
                    "day" => "Monday",
                    "time" => "8:00AM - 9:00AM"
                ],
                [
                    "lawyer_id" => "4",
                    "client_id" => "4",
                    "day" => "Friday",
                    "time" => "10:00AM - 11:00AM"
                ],
                [
                    "lawyer_id" => "1",
                    "client_id" => "5",
                    "day" => "Tuesday",
                    "time" => "8:00AM - 9:00AM"
                ],
                [
                    "lawyer_id" => "2",
                    "client_id" => "6",
                    "day" => "Monday",
                    "time" => "12:00AM - 1:00PM"
                ],
            ]
        );
        $client->each(function($client){
            Booking::insert($client);
        });
    }
}
