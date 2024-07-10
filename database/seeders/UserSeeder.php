<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        $users = [
            [
                'id'             => 1,
                'name'           => '管理者',
                'email'          => 'admin@admin.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => '櫻木花道',
                'email'          => 'sakuragi_hanamichi@slamdunk.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
            ],
            [
                'id'             => 3,
                'name'           => '流川楓',
                'email'          => 'rukawa_kaede@slamdunk.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
            ],
            [
                'id'             => 4,
                'name'           => '赤木剛憲',
                'email'          => 'akagi_takenori@slamdunk.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
            ],
            [
                'id'             => 5,
                'name'           => '宮城良田',
                'email'          => 'miyagi_ryota@slamdunk.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
            ],
            [
                'id'             => 6,
                'name'           => '三井壽',
                'email'          => 'mitsui_hisashi@slamdunk.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
            ],
            [
                'id'             => 7,
                'name'           => '木暮公延',
                'email'          => 'kogure_kiminobu@slamdunk.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
