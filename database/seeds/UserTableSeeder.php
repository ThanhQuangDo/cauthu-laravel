<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'Do Thanh Quang',
            'email' => 'quangdt1603@gmail.com',
            'password' => bcrypt('quang1603'),
            'avatar' => 'default.jpg'
        ];
        User::create($user);
    }
}
