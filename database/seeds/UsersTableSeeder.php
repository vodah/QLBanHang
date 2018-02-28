<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Anh Son', 'email' => 'admin@abc.com', 'password' => Hash::make('12345678'), 'address' => 'Mỗ Lao, Hà Đông, Hà Nội', 'phone' => '0981639326'],
            ['name' => 'Vo Danh', 'email' => 'client@abc.com', 'password' => Hash::make('12345678'), 'address' => 'Mỗ Lao, Hà Đông, Hà Nội', 'phone' => '0981639326']
        ];
        foreach ($users as $value) {
            DB::table('users')->insert($value);
        }
    }
}
