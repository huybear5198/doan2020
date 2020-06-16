<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            'id' => 1,
            'role_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'phone' => '0988461571',
            'password' => Hash::make('password'),
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'role_id' => 1,
            'name' => 'Dương Quốc Hưng',
            'email' => 'quochung@gmail.com',
            'phone' => '0988461571',
            'address' => "350/39/6 Lê Đức Thọ, P6, Quận Gò Vấp, TP Hồ Chí Minh",
            'password' => Hash::make('password'),
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'id' => 3,
            'role_id' => 1,
            'name' => 'Vũ Quốc Huy',
            'email' => 'quochuy@gmail.com',
            'phone' => '0955251362',
            'password' => Hash::make('password'),
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'id' => 4,
            'role_id' => 2,
            'name' => 'Lưu Thanh Sơn',
            'email' => 'thanhson@gmail.com',
            'phone' => '0955251362',
            'password' => Hash::make('password'),
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'id' => 5,
            'role_id' => 2,
            'name' => 'Bạch Bảo Khương',
            'email' => 'baokhuong@gmail.com',
            'phone' => '0955251362',
            'password' => Hash::make('password'),
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'id' => 6,
            'role_id' => 2,
            'name' => 'Nguyễn Đình Diệu',
            'email' => 'dinhdieu@gmail.com',
            'phone' => '0955251362',
            'password' => Hash::make('password'),
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'id' => 7,
            'role_id' => 2,
            'name' => 'Nguyễn Dương Lân',
            'email' => 'duonglan@gmail.com',
            'phone' => '0955251362',
            'password' => Hash::make('password'),
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'id' => 8,
            'role_id' => 2,
            'name' => 'Nguyễn Thanh Nguyên',
            'email' => 'thanhnguyen@gmail.com',
            'phone' => '0955251362',
            'password' => Hash::make('password'),
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'id' => 9,
            'role_id' => 2,
            'name' => 'Nguyễn Kim Tuấn',
            'email' => 'kimtuan@gmail.com',
            'phone' => '0955251362',
            'password' => Hash::make('password'),
            'created_at' => now(),
        ]);
    }
}
