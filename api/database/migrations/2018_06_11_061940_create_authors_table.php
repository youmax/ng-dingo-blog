<?php

use App\Models\Author;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->string('name');
            $table->string('email');
            $table->json('job');
            $table->json('greeting');
            $table->json('introduction');
            $table->json('socialLinks');
            $table->json('services');
            $table->json('location');
            $table->json('skills');
            $table->json('educations');
            $table->json('experiences');
            $table->timestamps();
        });

        Author::create([
            'name' => 'Nick',
            'email' => 'youmax210139@gmail.com',
            'job' => ['en' => 'PHP developer', 'cn' => 'PHP程序員'],
            'greeting' => [
                'en' => 'Hi there, my name is Nick and I am good at web application and game development. Have a look through my portfolio items see what I can do for you.',
                'cn' => '你好，我的名字叫Nick。擅長互聯網應用及游戲開發。歡迎瀏覽我的作品集，或聯繫我取得更多幫助。',
            ],
            'introduction' => [
                'en' => 'Hello! I’m Nick. PHP Developer with over 6 years of experience. Experienced with all stages of the development cycle for dynamic web projects. Having an in-depth knowledge including advanced CSS3, JavaScript, Angular2+, PHP. Strong background in management and leadership.',
                'cn' => '你好，我叫Nick。有6年PHP開發經驗，有維護線上專案經驗。熟練使用Javascript，CSS，PHP，Angular2＋，有項目開發管理經驗。',
            ],
            'socialLinks' =>[
                ['name'=>'Google+', 'url'=> 'https://plus.google.com/u/0/+shujiYuan', 'icon'=>'fa-google-plus'],
                ['name'=>'Github', 'url'=> 'https://github.com/youmax', 'icon'=>'fa-github'],
            ],
            'services' => [
                [
                    'icon' => 'fa-graduation-cap',
                    'title' => [
                        'en' => 'Professional Developer',
                        'cn' => '專業開發人員',
                    ],
                    'desc' => [
                        'en' => 'I am a professional developer and system designer with many years of experience.',
                        'cn' => '系統設計及分析，有多年軟件開發經驗。',
                    ],
                ],
                [
                    'icon' => 'fa-star',
                    'title' => [
                        'en' => 'Happy Customers',
                        'cn' => '用戶滿意度',
                    ],
                    'desc' => [
                        'en' => 'The primary target of my project is to satisfied my clients and improve the perceptions.',
                        'cn' => '以提升用戶滿意度及用戶體驗為首要目標。',
                    ],
                ],
                [
                    "icon" => "fa-modx",
                    "title" => [
                        'en' => "Game Design",
                        'cn' => '游戲設計',
                    ],
                    'desc' => [
                        'en' => 'I\'m good at design web game and pc game using Phaser and Unity.',
                        'cn' => '擅長使用Phaser及Unity開發頁游及端游。',
                    ],

                ],
                [
                    "icon" => "fa-shopping-basket",
                    "title" => [
                        'en' => 'E-Commerce',
                        'cn' => 'E-Commerce',
                    ],
                    "desc" => [
                        'en' => "I also have experience developing E-Commerce sites using Omnipay.",
                        'cn' => '有使用Omnipay串接金流的開發經驗',
                    ],
                ],

            ],
            'location' => [
                "latitude" => 25.000049,
                "longitude" => 121.512878,
            ],
            "skills" => [
                [
                    "name" => "PHP",
                    "percent" => 90,
                ],
                [
                    "name" => "HTML & css",
                    "percent" => 90,
                ],
                [
                    "name" => "javascript",
                    "percent" => 70,
                ],
                [
                    "name" => "python",
                    "percent" => 60,
                ],
                [
                    "name" => "C＋＋",
                    "percent" => 80,
                ],
                [
                    "name" => "English",
                    "percent" => 70,
                ],
                [
                    "name" => "Mysql",
                    "percent" => 80,
                ],
                [
                    "name" => "Teamwork",
                    "percent" => 80,
                ],
                [
                    "name" => "Laravel 5",
                    "percent" => 80,
                ],
                [
                    "name" => "Angular 6",
                    "percent" => 80,
                ],
                [
                    "name" => "NodeJS",
                    "percent" => 70,
                ],
                [
                    "name" => "Ionic 3",
                    "percent" => 60,
                ],
                [
                    "name" => "Phaser 3",
                    "percent" => 60,
                ],
                [
                    "name" => "Unity 5",
                    "percent" => 60,
                ],
            ],
            'educations' => [
                [
                    "date" => "2008-2010",
                    "school" => [
                        'en' => "NCUE University",
                        'cn' => '國立彰化師範大學',
                    ],
                    "degree" => [
                        'en' => "Banchlor degree",
                        'cn' => "學士學位",
                    ],
                    "desc" => [
                        'en' => "I was major in Computer Science and successful completed all the credits.Image Processing and Data Mining are the primary domains I studied for.",
                        'cn' => '主修軟件工程並完成所有學分。學習影像處理，資料探勘等領域。',
                    ],
                ],
                [
                    "date" => "2010-2012",
                    "school" => [
                        'en' => "NCUE University",
                        'cn' => '國立彰化師範大學',
                    ],
                    "degree" => [
                        'en' => "Master degree",
                        'cn' => '碩士學位',
                    ],
                    "desc" => [
                        'en' => "I completed this degree from this prestigious insitution.",
                        'cn' => '修完所有學分。',
                    ],
                ],
            ],
            "experiences" => [
                [
                    "name" => [
                        'en' => "Go1010 Inc",
                        'cn' => '港商傳動數碼',
                    ],
                    "position" => [
                        'en' => "Senior PHP Developer",
                        'cn' => '資深PHP專員',
                    ],
                    "date" => [
                        'en' => "Sep 2015 - April 2017",
                        'cn' => '九月 2015 - 四月 2017',
                    ],
                    "desc" => [
                        'en' => "",
                        'cn' => '游戲官網開發，用戶登入及註冊。
                                 游戲後端API開發',
                    ],
                ],
                [
                    "name" => [
                        'en' => "Winking Entertainment Inc",
                        'cn' => '唯晶科技',
                    ],
                    "position" => [
                        'en' => "Senior PHP Developer",
                        'cn' => '資深PHP專員',
                    ],
                    "date" => [
                        'en' => "Jul 2013 - August 2015",
                        'cn' => '六月 2013 - 八月 2015',
                    ],
                    "desc" => [
                        'en' => ".",
                        'cn' => '官網開發，管理者主控介面開發，後端API服務開發',
                    ],
                ],
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
