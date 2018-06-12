<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Translation;

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
        Translation::create(['name'=>'en', 'data'=>['HOME'=>['WELCOME'=>'Welcome Stranger']]]);
        Translation::create(['name'=>'cn', 'data'=>['HOME'=>['WELCOME'=>'歡迎，訪客']]]);
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
