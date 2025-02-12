<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
            [
                "name" => "admin",
                "email" => "admin@gmail.com",
                "password" => bcrypt("12345678"),
            ]
        );
        DB::table("users")->insert($data);
    }
}
