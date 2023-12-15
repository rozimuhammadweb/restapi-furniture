<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'name' => [
                'uz' => 'Yangi',
                'ru' => 'Новий',
            ],
            'code' => 'new',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'uz' => 'Tasdiqlandi',
                'ru' => 'Умвпуыыа',
            ],
            'code' => 'confirmed',
            'for' => 'order'
        ]);
        Status::create([
            'name' => [
                'uz' => 'Kutilmoqda',
                'ru' => 'Ожданий',
            ],
            'code' => 'processing',
            'for' => 'order'
        ]);
        Status::create([
            'name' => [
                'uz' => 'Jo\'natilmoqda',
                'ru' => 'ватыоваивыщ',
            ],
            'code' => 'shipping',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'uz' => 'Yetkazib berildi',
                'ru' => 'ывщзшмрыщв',
            ],
            'code' => 'delivered',
            'for' => 'order'
        ]);
        Status::create([
            'name' => [
                'uz' => 'Tugatildi',
                'ru' => 'ывщзшмрыщв',
            ],
            'code' => 'complated',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'uz' => 'Yopildi',
                'ru' => 'ывщзшмрыщв',
            ],
            'code' => 'closed',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'uz' => 'Bekor qilindi',
                'ru' => 'Bekor qilindi',
            ],
            'code' => 'canceled',
            'for' => 'order'
        ]);
        Status::create([
            'name' => [
                'ru' => 'Qaytarib berildi',
                'uz' => 'Qaytarib berildi',
            ],
            'code' => 'refunded',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'uz' => 'To\'lov kutilmoqda',
                'ru' => 'To\'lov kutilmoqda',
            ],
            'code' => 'waiting_payment',
            'for' => 'order'
        ]);
        Status::create([
            'name' => [
                'uz' => 'To\'landi',
                'ru' => 'To\'landi',
            ],
            'code' => 'paid',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'uz' => 'To\'lovdan xatolik',
                'ru' => 'To\'lovdan xatolik',
            ],
            'code' => 'payment_error',
            'for' => 'order'
        ]);
    }
}
