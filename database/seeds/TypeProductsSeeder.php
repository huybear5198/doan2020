<?php

use Illuminate\Database\Seeder;

class TypeProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_products')->delete();

        DB::table('type_products')->insert([
            'id' => 1,
            'name' => "Bất động sản",
            'description' => 'Nhà',
            'image' => 'img/building.png',
        ]);
        DB::table('type_products')->insert([
            'id' => 2,
            'name' => "Xe cộ",
            'description' => 'Xe',
            'image' => 'img/car.png',
        ]);
        DB::table('type_products')->insert([
            'id' => 3,
            'name' => "Thời trang",
            'description' => 'Quần áo, phụ kiện,...',
            'image' => 'img/fashion.png',
        ]);
        DB::table('type_products')->insert([
            'id' => 4,
            'name' => "Đồ gia dụng",
            'description' => 'Cây lau nhà, chổi,...',
            'image' => 'img/household.png',
        ]);
        DB::table('type_products')->insert([
            'id' => 5,
            'name' => "Thú cưng",
            'description' => 'Chó, mèo,...',
            'image' => 'img/pet.png',
        ]);
        DB::table('type_products')->insert([
            'id' => 6,
            'name' => "Dịch vụ",
            'description' => 'Tư vấn, sơn nhà cửa,...',
            'image' => 'img/service.png',
        ]);
        DB::table('type_products')->insert([
            'id' => 7,
            'name' => "Dụng cụ văn phòng",
            'description' => 'Bút, hộp bút,...',
            'image' => 'img/stationary.png',
        ]);
        DB::table('type_products')->insert([
            'id' => 8,
            'name' => "Đồ điện tử",
            'description' => 'Điện thoại, laptop,...',
            'image' => 'img/technology.png',
        ]);
        DB::table('type_products')->insert([
            'id' => 9,
            'name' => "Việc làm",
            'description' => 'Việc làm',
            'image' => 'img/work.png',
        ]);
    }
}
