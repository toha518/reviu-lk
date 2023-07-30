<?php



namespace Database\Seeders;



use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use App\Models\User;



class CreateUsersSeeder extends Seeder

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

                'name' => 'Pengguna Admin',

                'email' => 'admin@bps.go.id',

                'type' => 0,

                'password' => bcrypt('123456'),

            ],


            [

                'name' => 'Pengguna Satker',

                'email' => 'satker@bps.go.id',

                'type' => 1,

                'password' => bcrypt('123456'),

            ],


            [

                'name' => 'Pengguna Tim Pereviu',

                'email' => 'reviu@bps.go.id',

                'type' => 2,

                'password' => bcrypt('123456'),

            ],


            [

                'name' => 'Pengguna Bagian Akuntansi',

                'email' => 'akuntansi@bps.go.id',

                'type' => 3,

                'password' => bcrypt('123456'),

            ],

        ];



        foreach ($users as $key => $user) {

            User::create($user);
        }
    }
}
