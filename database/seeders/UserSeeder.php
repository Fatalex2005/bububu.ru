<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::where('code', 'admin')->first();
        $role_manager = Role::where('code', 'manager')->first();
        $role_user = Role::where('code', 'user')->first();
        User::create([
            'surname' => 'Рюгин',
            'name' => 'Алексей',
            'patronymic' => 'Иванович',
            'sex' => 1,
            'birthday' => '2005-07-21',
            'email' => 'ruginleha@gmail.com',
            'password' => 'Lexa2019)',
            'nickname' => 'Fatalex',
            'avatar' => null,
            'phone' => '+7(952)804-61-23',
            'api_token' => '1',
            'role_id' => $role_admin->id,
        ]);
        User::create([
            'surname' => 'Окулов',
            'name' => 'Семён',
            'patronymic' => 'Михайлович',
            'sex' => 1,
            'birthday' => '2005-03-07',
            'email' => 'okulov@gmail.com',
            'password' => 'Semen2005',
            'nickname' => 'scffs',
            'avatar' => null,
            'phone' => '+7(923)608-61-96',
            'api_token' => '2',
            'role_id' => $role_manager->id,
        ]);
        User::create([
            'surname' => 'Шейкина',
            'name' => 'Елизавета',
            'patronymic' => 'Витальевна',
            'sex' => 0,
            'birthday' => '2005-04-23',
            'email' => 'lisa@gmail.com',
            'password' => 'Lisa2005',
            'nickname' => 'jungkkk',
            'avatar' => null,
            'phone' => '+7(952)804-61-21',
            'api_token' => '3',
            'role_id' => $role_user->id,
        ]);
    }
}
