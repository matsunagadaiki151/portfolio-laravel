<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $contents = ["Twitter(基本)", "wantedly", 'github',
        'Transformerにおける知識蒸留の適用', 'OpenNMTで機械翻訳',
        '公式Webサイト(サークル)', 'Twitter(サークル)'];

        foreach($contents as $content)
        {
            $params = [
                'title' => $content,
                'vote_num' => 0.
            ];

            DB::table('votes')->insert($params);
        }
    }
}
