<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run()
    {
        Menu::create(['name' => 'Nasi Ayam ', 'price' => 10000, 'image' => 'nasi_ayam.jpg']);
        Menu::create(['name' => 'Hotdog', 'price' => 8000, 'image' => 'hotdog.jpg']);
        Menu::create(['name' => 'putu ayu', 'price' => 1000, 'image' => 'putu_ayu.jpg']);
        Menu::create(['name' => 'Dimsum', 'price' => 5000, 'image' => 'dimsum.jpg']);
        Menu::create(['name' => 'martabak mini', 'price' => 3000, 'image' => 'martabak_mini.jpg']);
        Menu::create(['name' => 'bala-bala', 'price' => 1000, 'image' => 'bala_bala.jpg']);
        Menu::create(['name' => 'Risol', 'price' => 3000, 'image' => 'risol.jpg']);
        Menu::create(['name' => 'Kebab', 'price' => 7000, 'image' => 'kebab.jpg']);
        Menu::create(['name' => 'onigiri', 'price' => 3000, 'image' => 'onigiri.jpg']);
    }
}
