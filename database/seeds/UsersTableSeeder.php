<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$N16jxqpc1.ZIj3uz0245d.wjIw5mHqTOHuyZNrnRIvxqv1kau86DK',
            'remember_token' => null,
            'created_at'     => '2019-05-07 00:42:49',
            'updated_at'     => '2019-05-07 00:42:49',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
