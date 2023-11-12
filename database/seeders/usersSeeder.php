<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Database;
use Illuminate\Support\Facades\DB;
class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sql='insert into users (name,email,password,created_at,email_verified_at) values (?, ?, ?, ?, ?)';

        DB::insert($sql, [
            'Claudia',
            'clacla@gmail.com',
            Hash::make('azzurro'),
            Carbon::now(),
            Carbon::now()
        ]);
    }
}
