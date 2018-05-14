<?php namespace NickMoncur\WhatTheHealth\Updates;

use October\Rain\Database\Updates\Seeder;
use Illuminate\Support\Facades\DB;

class CreateBackendUser extends Seeder
{
    public function run()
    {
        $user = DB::table('backend_users')->where('login', 'nick');

        if(!$user) {
            DB::table('backend_users')->insert([
                'login' => 'nick',
                'email' => 'nmoncur10@gmail.com',
                'password' => bcrypt('qwerty'),
                'is_activated' => 1,
                'is_superuser' => 1
            ]);
        }
    }
}
