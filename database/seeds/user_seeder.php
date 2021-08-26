<?php

use Illuminate\Database\Seeder;
use App\User;
//use Hash;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new User();
        $data->name = "Raditya Wahyu";
        $data->email = "radityaw@gmail.com";
        $data->password = Hash::make('123456');
        $data->save();
    }
}
