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
                    "name" => "Rene Raniels",
                    "email" => "reneraniels@gmail.com",
                    "password" => Hash::make("reneraniels@gmail.com"),
                    "usertype" => "admin"
                ],
                [
                    "name" => "Ruth Christian",
                    "email" => "ruthchristian@gmail.com",
                    "password" => Hash::make("ruthchristian@gmail.com"),
                    "usertype" => "admin"
                ],
                [
                    "name" => "Gregory Kaster",
                    "email" => "gregorykaster@gmail.com",
                    "password" => Hash::make("gregorykaster@gmail.com"),
                    "usertype" => "admin"
                ],
                [
                    "name" => "John Ierrante",
                    "email" => "johnierrante@gmail.com",
                    "password" => Hash::make("johnierrante@gmail.com"),
                    "usertype" => "admin"
                ],
                [
                    "name" => "Betty Doyle",
                    "email" => "bettydoyle@gmail.com",
                    "password" => Hash::make("bettydoyle@gmail.com"),
                    "usertype" => "admin"
                ],
                [
                    "name" => "David Finch",
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