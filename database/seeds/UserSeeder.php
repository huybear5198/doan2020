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
        DB::table('location')->delete();
        DB::table('products')->delete();
        DB::table('type_products')->delete();

        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Admin',
            'avatar' => 'img/default-avatar.png',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('location')->insert([
            'city' => "TP Hồ Chí Minh",
            'district' => "Gò Vấp",
            'sub-district' => "6",
            'street' => "Lê Đức Thọ",
        ]);
        DB::table('location')->insert([
            'city' => "TP Hồ Chí Minh",
            'district' => "1",
            'sub-district' => "2",
            'street' => "Hàm Nghi",
        ]);
        DB::table('location')->insert([
            'city' => "TP Hồ Chí Minh",
            'district' => "8",
            'sub-district' => "3",
            'street' => "Phạm Thế Hiển",
        ]);
        DB::table('location')->insert([
            'city' => "TP Hà Nội",
            'district' => "Hoàn Kiếm",
            'sub-district' => "6",
            'street' => "Tràng Tiền",
        ]);
        DB::table('location')->insert([
            'city' => "TP Hà Nội",
            'district' => "Cầu Giấy",
            'sub-district' => "Phường 10",
            'street' => "Trần Duy Hưng",
        ]);

        DB::table('type_products')->insert([
            'name' => "Xe",
            'description' => 'Các loại Xe',
            'image' => 'img/car.png',
        ]);
        DB::table('type_products')->insert([
            'name' => "Bất động sản",
            'description' => 'Nhà cửa',
            'image' => 'img/building.png',
        ]);

        DB::table('products')->insert([
            'name' => "Xe 1",
            'type_product' => 1,
            'description' => 'Xe 1 Xe 1',
            'price' => 100000,
            'quantity' => 10,
            'id_user' => 1,
            'location_id' => 1,
            'image' => 'img/default-product.png',
        ]);
        DB::table('products')->insert([
            'name' => "Xe 2",
            'type_product' => 1,
            'description' => 'Xe 2 Xe 2',
            'price' => 150000,
            'quantity' => 10,
            'id_user' => 1,
            'location_id' => 2,
            'image' => 'img/default-product.png',
        ]);
        DB::table('products')->insert([
            'name' => "Xe 3",
            'type_product' => 1,
            'description' => 'Xe 3 Xe 3',
            'price' => 500000,
            'quantity' => 10,
            'id_user' => 1,
            'location_id' => 3,
            'image' => 'img/default-product.png',
        ]);
        DB::table('products')->insert([
            'name' => "Nhà 1",
            'type_product' => 2,
            'description' => 'Nhà 1 Nhà 1',
            'price' => 1000000000,
            'quantity' => 1,
            'id_user' => 1,
            'location_id' => 4,
            'image' => 'img/default-product.png',
        ]);
        DB::table('products')->insert([
            'name' => "Nhà 2",
            'type_product' => 2,
            'description' => 'Nhà 2',
            'price' => 2000000000,
            'quantity' => 1,
            'id_user' => 1,
            'location_id' => 5,
            'image' => 'img/default-product.png',
        ]);
    }
}
