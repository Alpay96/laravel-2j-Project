<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesajjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesajjs', function (Blueprint $table) {
            $table->id()->autoIncrement();
            #$table->integer('user_id'); //bu satır eklenecek.
            $table->string('name', 100);
            $table->string('surname', 100);
            $table->string('email', 50)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('subject', 150);
            $table->string('message')->nullable();
            $table->string('note', 100)->nullable();
            $table->string('status', 5)->nullable()->default('False');
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
        Schema::dropIfExists('mesajjs');
    }
}
