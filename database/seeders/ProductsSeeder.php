<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// use App\Models\products;
// use App\Models\categories;
use App\Models\Category;
use App\Models\Product;

use Faker\Factory as Faker;
class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        // Tạo một instance của Faker
        $faker = Faker::create();

        // Lấy tất cả các ID của categories hiện có
        $categoryIds = Category::all()->pluck('id')->toArray();

        // Vòng lặp để tạo 10 sản phẩm
        for ($i = 0; $i < 30; $i++) {
            // Tạo bản ghi sản phẩm trong cơ sở dữ liệu
            Product::create([
                'name' => $faker->word, // Tên sản phẩm ngẫu nhiên
                'img' => $faker->imageUrl(640, 480, 'products', true), // URL hình ảnh ngẫu nhiên
                'description' => $faker->sentence, // Mô tả ngẫu nhiên
                'price' => $faker->randomFloat(2, 10, 1000), // Giá ngẫu nhiên từ 10 đến 1000, với 2 chữ số thập phân
                'view' => $faker->numberBetween(0, 100000), // Số lượt xem ngẫu nhiên từ 0 đến 100,000
                'soil' => $faker->numberBetween(1, 10), // ID loại đất ngẫu nhiên từ 1 đến 10
                'brand_id' => $faker->numberBetween(1, 50), // ID thương hiệu ngẫu nhiên từ 1 đến 50
               'category_id' => $faker->randomElement($categoryIds) // Chọn ngẫu nhiên từ các ID hợp lệ
            ]);
        }
    }
}

