<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Menu;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->json('name')->unique();
            $table->string('path');
            $table->timestamps();
        });
        Menu::create(['name'=>['en'=>'Home', 'cn'=>'首頁'],'path'=>'home']);
        Menu::create(['name'=>['en'=>'resume', 'cn'=>'簡歷'],'path'=>'resume']);
        Menu::create(['name'=>['en'=>'portfolio', 'cn'=>'作品集'],'path'=>'portfolio']);
        Menu::create(['name'=>['en'=>'contact','cn'=>'聯繫方式'],'path'=>'contact']);
        Menu::create(['name'=>['en'=>'blog', 'cn'=>'網誌'],'path'=>'blog']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
