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
                [
                    "name" => "Joe",
                    "email" => "Joe@gmail.com",
                    "password" => Hash::make("Joe@gmail.com"),
                    "usertype" => "user"
                ],
                [
                    "name" => "John",
                    "email" => "John@gmail.com",
                    "password" => Hash::make("John@gmail.com"),
                    "usertype" => "user"
                ],
                [
                    "name" => "Sam",
                    "email" => "Sam@gmail.com",
                    "password" => Hash::make("Sam@gmail.com"),
                    "usertype" => "user"
                ],
                [
                    "name" => "Austin",
                    "email" => "Austin@gmail.com",
                    "password" => Hash::make("Austin@gmail.com"),
                    "usertype" => "user"
                ],
            ]
        );
        $lawyers->each(function($lawyers){
            usersend::insert($lawyers);
        });
    }
}