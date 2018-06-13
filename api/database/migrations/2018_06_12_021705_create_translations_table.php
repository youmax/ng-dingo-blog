<?php

use App\Models\Translation;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('translations', function (Blueprint $table) {
            $table->string('name')->unique();
            $table->json('value');
            $table->timestamps();
        });
        Translation::create(['name' => 'en', 'data' => [
            "ASIDE" => [
                "ABOUT_ME" => "about me",
                "FOLLOW_ME" => "follow me",
                "FOLLOW_DESC" => "Don't forget to follow me via my various social media accounts.",
                "RECENT_POSTS" => "recent posts",
            ],
            "HOME" => [
                "WELCOME" => "Welcome Stranger",
                "START" => "Let's get started",
            ],
            "RESUME" => [
                "TITLE" => "My resume",
                "DOWNLOAD" => "DOWNLOAD",
                "SKILLS" => "SKILLS",
                "PROFESSION_SKILLS" => "PROFESSION SKILLS",
                "ADDITIONAL_SKILLS" => "ADDITIONAL SKILLS",
                "EDUCATION" => "EDUCATION",
                "EXPERIENCE" => "EXPERIENCE",
            ],
            "PORTFOLIO" => [
                "TITLE" => "My portfolio",
            ],
            "CONTACT" => [
                "TITLE" => "Contact me for a quote",
                "SUBMIT" => "Submit form",
                "SUBTITLE" => "leave some message to me",
                "DESC" => "Please fill the below form and I'll reply you as soon as possible.",
                "NAME" => "your name (required)",
                "NAME_PLACEHOLDER" => "please input your name",
                "EMAIL" => "your email (required)",
                "EMAIL_PLACEHOLDER" => "please input your email",
                "EMAIL_TIP" => "I'll never share your email with anyone else.",
                "MESSAGE" => "message (required)",
            ],
            "BLOG" => [
                "TITLE" => "My blog",
            ],
        ]]);
        Translation::create(['name' => 'cn', 'data' => [
            "ASIDE" => [
                "ABOUT_ME" => "關於我",
                "FOLLOW_ME" => "關注我",
                "FOLLOW_DESC" => "歡迎關注我的社群帳號",
                "RECENT_POSTS" => "最新文章",
            ],
            "HOME" => [
                "WELCOME" => "歡迎，訪客",
                "START" => "立即開始",
            ],
            "RESUME" => [
                "TITLE" => "簡歷",
                "DOWNLOAD" => "下載",
                "SKILLS" => "技能",
                "PROFESSION_SKILLS" => "專業技能",
                "ADDITIONAL_SKILLS" => "其他技能",
                "EDUCATION" => "教育程度",
                "EXPERIENCE" => "工作經驗",
            ],
            "PORTFOLIO" => [
                "TITLE" => "作品集",
            ],
            "CONTACT" => [
                "TITLE" => "聯繫",
                "SUBMIT" => "提交",
                "SUBTITLE" => "留言給我",
                "DESC" => "請填入以下表單，我將䀆快回復您",
                "NAME" => "你的姓名（必填）",
                "NAME_PLACEHOLDER" => "請輸入姓名",
                "EMAIL" => "你的EMAIL（必填）",
                "EMAIL_PLACEHOLDER" => "請輸入EMAIL",
                "EMAIL_TIP" => "您的EMAIL資料不會因此外洩",
                "MESSAGE" => "訊息（必填）",
            ],
            "BLOG" => [
                "TITLE" => "網誌",
            ],
        ]]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('translations');
    }
}
