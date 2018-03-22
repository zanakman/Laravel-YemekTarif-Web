<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYemekTarifleriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yemek_tarifleri', function (Blueprint $table) {
            $table->increments('id');
            $table->string('yemek_adi')->nullable()->collation('utf8_general_ci');
            $table->text('tarif')->nullable()->collation('utf8_general_ci');
            $table->text('malzemeler')->nullable()->collation('utf8_general_ci');
            $table->text('yapilis')->nullable()->collation('utf8_general_ci');
            $table->string('resim')->nullable()->collation('utf8_general_ci');
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
        Schema::dropIfExists('yemek_tarifleri');
    }
}
