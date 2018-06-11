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
            'job' => ['en' => 'PHP developer', 'cn' => 'PHP程序員'],
            'greeting' => [
                'en' => 'Hi there, my name is Nick and I am making the web better again 1 site at a time. Have a look through my portfolio items see what I can do for you.',
                'cn' => '你好，我的名字叫Nick。喜歡開發互聯網應用並改善功能，歡迎連繫我。',
            ],
            'introduction' => [
                'en' => 'Hello! I’m Nick. PHP Developer with over 6 years of experience. Experienced with all stages of the development cycle for dynamic web projects. Having an in-depth knowledge including advanced HTML5, CSS3, JavaScript, jQuery, Angular2+, Laravel, PHP. Strong background in management and leadership.',
                'cn' => '你好，我叫Nick。有6年PHP開發經驗，有維護線上專案經驗。熟練使用Javascript，CSS，PHP，Angular2＋，有項目開發管理經驗。',
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
                        'cn' => '我是一個專業的開發者及系統設計員，有著多年的經驗。',
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
                        'cn' => '讓客戶滿意及提升使用者感受是我的首要目標。',
                    ],
                ],
                [
                    "icon" => "fa-modx",
                    "title" => [
                        'en' => "Game Design",
                        'cn' => '游戲設計',
                    ],
                    'desc' => [
                        'en' => 'I also enjoy design and developing some web game in my spare time with Phaser framwork.',
                        'cn' => '我也喜歡在閑睱時間開發及設計網頁游戲。',
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
                        'en' => "Major in Computer Science and successful completed all the credits.",
                        'cn' => '主修軟件工程並完成所有學分。',
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
                        'cn' => '官網開發，管理者主控介面開發，後端API服務開發',
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
