<?php

namespace Modules\Users\seeders;

use Illuminate\Database\Seeder;
use Modules\Users\src\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->name ='Ngọc Vân';
        $user->email = 'tungocvan@gmail.com';
        $user->password = Hash::make('123456');
        $user->group_id = 1;
        $user->save();

    }
}
;
