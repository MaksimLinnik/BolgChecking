<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id', true);
            $table->integer('occupation')->default(0);
            $table->integer('sdegree')->default(0);
            $table->integer('classnum')->default(0);
            $table->integer('age')->default(0);
            $table->string('name')->default("");
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('gender');
            $table->string('message')->default("");
            $table->string('group1');
            $table->string('description')->default("");
            $table->string('choice1')->default('off');
            $table->string('choice2')->default('off');
            $table->string('choice3')->default('off');
            $table->string('expectedsalary')->default(0);
            $table->string('CVfile');
            $table->string('filename');
            $table->string('totmessage')->default("");
            $table->integer('flag')->default(0);
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
