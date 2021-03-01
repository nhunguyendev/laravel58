<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('123'),
                'name'=>'Admin',
                'level'=>1
            ],
            [
                'email'=>'nhu@gmail.com',
                'password'=>bcrypt('123'),
                'name'=>'Nhu',
                'level'=>0
            ]
        ];
        DB::table('users')->insert($data);
    }
}
