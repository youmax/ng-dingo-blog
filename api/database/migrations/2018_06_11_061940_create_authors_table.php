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
            $table->json('banner');
            $table->json('background');
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
            'banner' => 'https://api.test/img/banner.jpg',
            'background' => 'https://api.test/img/background.jpg',
            'job' => ['en' => 'PHP developer', 'cn' => 'PHP程序員'],
            'greeting' => [
                'en' => 'Hi there, my name is Nick and I am good at web application and game development. Have a look through my portfolio items see what I can do for you.',
                'cn' => '你好，我的名字叫Nick。擅長互聯網應用及游戲開發。歡迎瀏覽我的作品集，或聯繫我取得更多幫助。',
            ],
            'introduction' => [
                'en' => 'Hello! I’m Nick. PHP Developer with over 6 years of experience. Experienced with all stages of the development cycle for dynamic web projects. Having an in-depth knowledge including advanced CSS3, JavaScript, Angular2+, PHP. Strong background in management and leadership.',
                'cn' => e('
                         <p style="padding-left:20px">php工程師，共6年工作經驗，三年BC經驗。<br>
                         參與過大型線上遊戲專案，維護過線上專案及數據庫。<br>
                         開發過爬蟲網站，遊戲官方網站，客服排班系統，後台金流管理，USB分享項目。<br>
                         有半年的敏捷開發經驗，担任過項目負責人。<br>
                         喜歡crossfit，有團隊合作精神。</p>'),
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
                        'en' => "NCUE University CSIE",
                        'cn' => '國立彰化師範大學 資訊工程系',
                    ],
                    "degree" => [
                        'en' => "Banchlor degree",
                        'cn' => "學士學位",
                    ],
                    "desc" => [
                        'en' => "I was major in Computer Science and successful completed all the credits.Image Processing and Data Mining are the primary domains I studied for.",
                        'cn' => '主修軟體工程並完成所有學分。偏好影像處理，資料探勘領域。',
                    ],
                ],
                [
                    "date" => "2010-2012",
                    "school" => [
                        'en' => "NCUE University CSIE",
                        'cn' => '國立彰化師範大學 資訊工程系',
                    ],
                    "degree" => [
                        'en' => "Master degree",
                        'cn' => '碩士學位',
                    ],
                    "desc" => [
                        'en' => "I completed this degree from this prestigious insitution.",
                        'cn' => '學習自然語言處理，研翵完所有學分。',
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
                        'cn' => '四月 2017 - 目前',
                    ],
                    "desc" => [
                        'en' => "",
                        'cn' => '<p>負責游戲官網開發以及後台用戶管理。</p>
                                 <p>游戲API開發，如百家樂，21點撲克，加勒比撲克，水果盤數據格式設計。</p>
                                 <p>同時管理游戲客戶端版本更新。</p>',
                    ],
                ],
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
                        'cn' => '<p>負責游戲官網開發以及後台用戶管理。</p>
                                 <p>游戲API開發，如百家樂，21點撲克，加勒比撲克，水果盤數據格式設計。</p>
                                 <p>同時管理游戲客戶端版本更新。</p>',
                    ],
                ],
                [
                    "name" => [
                        'en' => "Winking Entertainment Inc",
                        'cn' => '唯晶科技',
                    ],
                    "position" => [
                        'en' => "Senior PHP Developer",
                        'cn' => '資深PHP工程師',
                    ],
                    "date" => [
                        'en' => "Jul 2013 - August 2015",
                        'cn' => '六月 2013 - 八月 2015',
                    ],
                    "desc" => [
                        'en' => ".",
                        'cn' => '<p>開發客服管理系統，導入Twilio進行測試。</p>
                                 <p>開發游戲博弈系統。前端使用Flash/C＋＋開發用戶介面，
                                    後端C＋＋服務器加入對應packet處理，後台PHP根據數據
                                    庫資料產生對應報表。
                                </p>
                                 <p>分析線上數據庫與次版數據庫格式差異，撰寫對應T-SQL。
                                    在版本更新時，進行MS SQL數據庫資料遷移。
                                 </p>
                                 <p>
                                    內部編輯器製作，產生游戲客戶端需要的XML檔案。
                                 </p>
                                 <p>
                                    AVG游戲對接PHP後端的數據設計及開發，撰寫相關PHP單元
                                    測試。
                                 </p>',
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
