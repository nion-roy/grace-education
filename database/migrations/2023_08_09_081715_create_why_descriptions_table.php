<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhyDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('why_descriptions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('why_id')->unique();
            $table->text('description');
            $table->string('item1');
            $table->string('item2');
            $table->string('item3');
            $table->string('photo')->default('default.png');
            $table->string('is_active')->default('1');
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
        Schema::dropIfExists('why_descriptions');
    }
}
