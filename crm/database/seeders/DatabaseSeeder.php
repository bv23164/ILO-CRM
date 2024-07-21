<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         //User::factory(10)->create();
         //$user1 = User::findOrFail(1);
         //$user1->name = 'admin';
         //$user1->email = 'admin@example.com';
         //$user1->save();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //DB::table('customer')->truncate();   //清空表中数据
        Customer::factory()->count(1)->create();
    }
}

// 清空customer表数据：php artisan migrate:fresh
// 数据迁移＋运行种子：php artisan migrate --seed
