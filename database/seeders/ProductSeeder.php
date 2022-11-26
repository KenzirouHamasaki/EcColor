<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => '真っ黒',
                'explanatory' => '誰がどこから見てもこれが黒。',
                'image' => '/images/black.jpeg',
                'price' => '10800'
            ],
            [
                'name' => '青',
                'explanatory' => '綺麗な海を想像したらこの青。',
                'image' => '/images/blue.jpeg',
                'price' => '8400'
            ],
            [
                'name' => '少し濃い青',
                'explanatory' => '水族館を思い出すような青。',
                'image' => '/images/blue2.jpeg',
                'price' => '7900'
            ],
            [
                'name' => '濃い青',
                'explanatory' => '深海に潜った感覚に陥ってしまう青。',
                'image' => '/images/blue3.jpeg',
                'price' => '7900'
            ],
            [
                'name' => '少し薄い青',
                'explanatory' => '突然ラムネを飲みたくなる青。',
                'image' => '/images/blue4.jpeg',
                'price' => '7900'
            ],
            [
                'name' => '薄い青',
                'explanatory' => '雲一つない時に空を見上げた時の青。',
                'image' => '/images/blue5.jpeg',
                'price' => '7900'
            ],
            [
                'name' => '茶',
                'explanatory' => '競馬に行きたくなるっ茶。',
                'image' => '/images/brown.jpeg',
                'price' => '8400'
            ],
            [
                'name' => '青と緑の間',
                'explanatory' => '特に言うことはないけど綺麗。',
                'image' => '/images/emegreen.jpeg',
                'price' => '9200'
            ],
            [
                'name' => 'グレー',
                'explanatory' => '動物園のゾウさんのようなグレー。',
                'image' => '/images/gray.jpeg',
                'price' => '8400'
            ],
            [
                'name' => '緑',
                'explanatory' => '綺麗な世界観の草原のような緑。',
                'image' => '/images/green.jpeg',
                'price' => '8400'
            ],
            [
                'name' => '少し濃い緑',
                'explanatory' => '抹茶とかはこのくらいの緑。',
                'image' => '/images/green2.jpeg',
                'price' => '7900'
            ],
            [
                'name' => '濃い緑',
                'explanatory' => '森林に迷い込んだ時はこの緑。',
                'image' => '/images/green3.jpeg',
                'price' => '7900'
            ],
            [
                'name' => '薄い緑',
                'explanatory' => '田舎の景色って感じの緑。',
                'image' => '/images/green4.jpeg',
                'price' => '7900'
            ],
            [
                'name' => '少し薄い緑',
                'explanatory' => '現実ではあまりお目にかかれない緑。',
                'image' => '/images/green5.jpeg',
                'price' => '7900'
            ],
            [
                'name' => 'オレンジ',
                'explanatory' => '人参好きのためにあるようなオレンジ。',
                'image' => '/images/orange.jpeg',
                'price' => '8400'
            ],
            [
                'name' => 'ピンク',
                'explanatory' => 'きゃぴきゃぴしたい時のピンク。',
                'image' => 'images/pink.jpeg',
                'price' => '9200'
            ],
            [
                'name' => '紫',
                'explanatory' => '不思議な力を得ることができる紫。',
                'image' => '/images/purple.jpeg',
                'price' => '9200'
            ],
            [
                'name' => '赤',
                'explanatory' => '心の底から闘志を燃やせる赤。',
                'image' => '/images/red.jpeg',
                'price' => '8400'
            ],
            [
                'name' => '少し濃い赤',
                'explanatory' => 'アインシュタインのきっかけの赤。',
                'image' => '/images/red2.jpeg',
                'price' => '7900'
            ],
            [
                'name' => '濃い赤',
                'explanatory' => '献血に行きたくなるような赤。',
                'image' => '/images/red3.jpeg',
                'price' => '7900'
            ],
            [
                'name' => '薄い赤',
                'explanatory' => '寿司屋でサーモン頼む人の赤。',
                'image' => '/images/red4.jpeg',
                'price' => '7900'
            ],
            [
                'name' => '黄色',
                'explanatory' => 'ひよこが可愛いと思ったらこの黄色。',
                'image' => '/images/yellow.jpeg',
                'price' => '8400'
            ],
            [
                'name' => '白',
                'explanatory' => '何色にでも染めることができる白。',
                'image' => '/images/white.jpeg',
                'price' => '10800'
            ],

        ]);
    }
}
