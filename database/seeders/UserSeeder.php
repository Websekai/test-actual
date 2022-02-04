<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
            'firstname' => 'firstname_candidat1',
            'lastname' => 'lastname_candidat1',
            'email' => 'candidat1@gmail.com',
            'password' => '$2y$10$Y1Z40GCAlAcOx2jvNUJHTuraguoab3u7F5fzo1fMbZtpTYPCgknx6',
            'zip_code' => '75012',
            'phone' => '0655441122',
            'address' => 'chemin du test'
        ]);
        $user->save();

        $user = new User([
            'firstname' => 'firstname_candidat2',
            'lastname' => 'lastname_candidat2',
            'email' => 'candidat2@gmail.com',
            'password' => '$2y$10$Y1Z40GCAlAcOx2jvNUJHTuraguoab3u7F5fzo1fMbZtpTYPCgknx6',
            'zip_code' => '06200',
            'phone' => '0755448877',
            'address' => 'route d\example'
        ]);
        $user->save();

        $user = new User([
            'firstname' => 'firstname_candidat3',
            'lastname' => 'lastname_candidat3',
            'email' => 'candidat3@gmail.com',
            'password' => '$2y$10$Y1Z40GCAlAcOx2jvNUJHTuraguoab3u7F5fzo1fMbZtpTYPCgknx6',
            'zip_code' => '30200',
            'phone' => '0455221155',
            'address' => 'autre chemin test'
        ]);
        $user->save();
    }
}
