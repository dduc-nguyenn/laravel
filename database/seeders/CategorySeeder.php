<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Thời sự',
            'Thế giới',
            'Kinh tế',
            'Đời sống',
            'Sức khỏe',
            'Giới trẻ',
            'Giáo dục',
            'Du lịch',
            'Văn hóa',
            'Giải trí',
            'Thể thao',
            'Công nghệ',
            'Xe',
            'Video',
            'Tiêu dùng',
            'Thời trang trẻ',
        ];
        for ($i=0; $i < count($data); $i++) { 
            Category::create([
                'name' => $data[$i]
            ]);
        }
    }
}
