<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\usersend;

class usersender extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lawyers = collect(
            [
                [
                    "name" => "reneraniels",
                    "email" => "reneraniels@gmail.com",
                    "password" => Hash::make("reneraniels@gmail.com"),
                    "usertype" => "admin"
                ],
                [
                    "name" => "ruthchristian",
                    "email" => "ruthchristian@gmail.com",
                    "password" => Hash::make("ruthchristian@gmail.com"),
                    "usertype" => "admin"
                ],
                [
                    "name" => "gregorykaster",
                    "email" => "gregorykaster@gmail.com",
                    "password" => Hash::make("gregorykaster@gmail.com"),
                    "usertype" => "admin"
                ],
                [
                    "name" => "johnierrante",
                    "email" => "johnierrante@gmail.com",
                    "password" => Hash::make("johnierrante@gmail.com"),
                    "usertype" => "admin"
                ],
                [
                    "name" => "bettydoyle",
                    "email" => "bettydoyle@gmail.com",
                    "password" => Hash::make("bettydoyle@gmail.com"),
                    "usertype" => "admin"
                ],
                [
                    "name" => "davidfinch",
                    "email" => "davidfinch@gmail.com",
                    "password" => Hash::make("davidfinch@gmail.com"),
                    "usertype" => "admin"
                ],
            ]
        );
        $lawyers->each(function($lawyers){
            usersend::insert($lawyers);
        });
    }
}