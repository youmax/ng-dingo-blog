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
            'banner' => 'http://blogapi.desuga.me/img/banner.jpg',
            'background' => 'http://blogapi.desuga.me/img/background.jpg',
            'job' => ['en' => 'PHP developer', 'cn' => 'PHP程序員'],
            'greeting' => [
                'en' => 'Hi there, my name is Nick and I am good at web application and game development. Have a look through my portfolio items see what I can do for you.',
                'cn' => '你好，我的名字叫Nick。擅長互聯網應用及游戲開發。歡迎瀏覽我的作品集，或聯繫我取得更多幫助。',
            ],
            'introduction' => [
                'en' => 'Hello! I’m Nick. PHP Developer with over 6 years of experience. Experienced with all stages of the development cycle for dynamic web projects. Having an in-depth knowledge including advanced CSS3, JavaScript, Angular2+, PHP. Strong background in management and leadership.',
                'cn' => e('
                         <p style="padding-left:20px">php工程師，6年工作經驗，三年BC經驗。<br>
                         參與過大型線上遊戲專案，維護過線上專案及數據庫。<br>
                         開發過爬蟲網站，遊戲官方網站，客服排班系統，後台金流管理，USB分享項目。<br>
                         有半年敏捷開發經驗，担任過項目負責人。<br>
                         喜歡crossfit，具團隊合作精神。</p>'),
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
                        'cn' => '擅長使用Phaser及Unity開發頁游及端游。。',
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
                        'cn' => '主修軟體工程並完成所有學分。擅長影像處理，資料探勘領域。',
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
                        'cn' => '研習完所有學分。學習自然語言處理領域，以中研院斷詞系統將中文句子斷詞，
                                 並基於知網詞庫及相似度演算法對詞組進行語意分析。',
                    ],
                ],
            ],
            "experiences" => [
                [
                    "name" => [
                        'en' => "****",
                        'cn' => '****',
                    ],
                    "position" => [
                        'en' => "PHP Developer",
                        'cn' => 'PHP專員',
                    ],
                    "date" => [
                        'en' => "April 2017 - Current",
                        'cn' => '四月 2017 - 目前',
                    ],
                    "desc" => [
                        'en' => "",
                        'cn' => '<p>USB專案開發管理，撰寫Flask及celery-kombu腳本對接Eltima Network Gate驅動API，後台接口開發。</p>
                                 <p>USB前台介面開發，使用angular 4開發管理介面，實現修改網卡設定，USB分享及釋放功能。</p>
                                 <p>金流系統開發，撰寫前後台頁面，對接etcd服務，對接網銀出款服務，對外API，及相關單元測試。</p>',
                    ],
                ],
                [
                    "name" => [
                        'en' => "Go1010 Inc",
                        'cn' => '港商傳動數碼',
                    ],
                    "position" => [
                        'en' => "Senior PHP Developer",
                        'cn' => '資深PHP工程師',
                    ],
                    "date" => [
                        'en' => "Sep 2015 - April 2017",
                        'cn' => '九月 2015 - 四月 2017',
                    ],
                    "desc" => [
                        'en' => "",
                        'cn' => '<p>游戲官網開發，包含使用者登入及後台管理，內容管理功能。</p>
                                 <p>爬蟲網站開發，PHPquery獲取Yahoo運動網站數據後導入數據庫。</p>
                                 <p>游戲API開發，包含Video Poker,百家樂，21點撲克，加勒比撲克的數據設計及單元測試。</p>
                                 <p>整合Rachet套件，提供websocket client連接，訂關函式撰寫。</p>
                                 <p>負責客戶端Unity執行檔更新，asset bundle資源管理。</p>',
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
                        'cn' => '七月 2013 - 八月 2015',
                    ],
                    "desc" => [
                        'en' => ".",
                        'cn' => '<p>客服管理系統開發，包含客服人員的排班，權限管理，任務指派
                                    以及玩家意見區。</p>
                                 <p>博弈系統開發趣拼圖，比大小游戲，
                                    使用Flash/C＋＋開發用戶介面，
                                    C＋＋撰寫遊戲邏輯，
                                    後台PHP處理數據庫資料產生對應報表。
                                </p>
                                 <p>分析線上數據庫與次版數據庫格式差異，撰寫對應T-SQL，進行MS SQL數據庫資料遷移。
                                 </p>
                                 <p>
                                    內部編輯器製作。製作道具，倉庫編輯器，
                                    產生游戲客戶端對應的XML檔案。
                                 </p>
                                 <p>
                                    AVG游戲PHP後端API數據設計開發，撰寫相關單元
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
