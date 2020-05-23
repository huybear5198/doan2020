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
        DB::table('products')->delete();
        DB::table('type_products')->delete();

        DB::table('users')->insert([
            'id' => 1,
            'role_id' => 1,
            'name' => 'Admin',
            'avatar' => 'img/default-avatar.png',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'role_id' => 2,
            'name' => 'User 1',
            'avatar' => 'img/default-avatar.png',
            'email' => 'user1@user.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'id' => 3,
            'role_id' => 2,
            'name' => 'User 2',
            'avatar' => 'img/default-avatar.png',
            'email' => 'user2@user.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('type_products')->insert([
            'id' => 1,
            'name' => "Xe",
            'description' => 'Các loại Xe',
            'image' => 'img/car.png',
        ]);
        DB::table('type_products')->insert([
            'id' => 2,
            'name' => "Bất động sản",
            'description' => 'Nhà cửa',
            'image' => 'img/building.png',
        ]);

        DB::table('products')->insert([
            'id' => 1,
            'name' => "Xe 1",
            'type_product' => 1,
            'description' => 'Xe 1 Xe 1',
            'price' => 100000,
            'quantity' => 10,
            'id_user' => 1,
            'city' => "TP Hồ Chí Minh",
            'district' => "Gò Vấp",
            'sub_district' => "6",
            'street' => "Lê Đức Thọ",
            'image' => 'img/default-product.png',
        ]);
        DB::table('products')->insert([
            'id' => 2,
            'name' => "Xe 2",
            'type_product' => 1,
            'description' => 'Xe 2 Xe 2',
            'price' => 150000,
            'quantity' => 10,
            'id_user' => 1,
            'city' => "TP Hồ Chí Minh",
            'district' => "1",
            'sub_district' => "2",
            'street' => "Hàm Nghi",
            'image' => 'img/default-product.png',
        ]);
        DB::table('products')->insert([
            'id' => 3,
            'name' => "Xe 3",
            'type_product' => 1,
            'description' => 'Xe 3 Xe 3',
            'price' => 500000,
            'quantity' => 10,
            'id_user' => 1,
            'city' => "TP Hồ Chí Minh",
            'district' => "8",
            'sub_district' => "3",
            'street' => "Phạm Thế Hiển",
            'image' => 'img/default-product.png',
        ]);
        DB::table('products')->insert([
            'id' => 4,
            'name' => "Nhà 1",
            'type_product' => 2,
            'description' => 'Nhà 1 Nhà 1',
            'price' => 1000000000,
            'quantity' => 1,
            'id_user' => 1,
            'city' => "TP Hà Nội",
            'district' => "Hoàn Kiếm",
            'sub_district' => "6",
            'street' => "Tràng Tiền",
            'image' => 'img/default-product.png',
        ]);
        DB::table('products')->insert([
            'id' => 5,
            'name' => "Nhà 2",
            'type_product' => 2,
            'description' => 'Nhà 2',
            'price' => 2000000000,
            'quantity' => 1,
            'id_user' => 1,
            'city' => "TP Hà Nội",
            'district' => "Cầu Giấy",
            'sub_district' => "Phường 10",
            'street' => "Trần Duy Hưng",
            'image' => 'img/default-product.png',
        ]);
    }
}
