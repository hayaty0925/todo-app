<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * 動作確認用のダミーデータを登録する
     */
    public function run()
    {
        $names = [
            'プログラミング',
            'イベント企画',
            '就職対策',
            '企業プロジェクト',
        ];

        foreach ($names as $name) {
            Task::create([
                'name'   => $name,
                'status' => false,
            ]);
        }

        Task::create([
            'name'   => 'X用ロゴ(済みの例)）',
            'status' => true,
        ]);
    }
}
