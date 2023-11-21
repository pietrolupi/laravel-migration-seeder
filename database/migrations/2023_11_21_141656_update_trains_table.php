<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->tinyInteger('wagons_number')->after('train_code');
            $table->boolean('is_in_time')->default(true);
            $table->boolean('is_suppressed')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->boolean('is_suppressed');
            $table->boolean('is_in_time');
            $table->tinyInteger('wagons_number');
        });
    }
};
