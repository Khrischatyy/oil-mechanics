<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_systems', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->text('description')->nullable();
            $table->json('table')->nullable();
            $table->tinyInteger('is_parent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parent_systems');
    }
}
