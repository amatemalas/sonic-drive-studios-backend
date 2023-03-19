<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public const TABLE = 'contacts';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(self::TABLE, function (Blueprint $table) {
            $table->integer('songs')->nullable();
            $table->integer('instruments')->nullable();
            $table->integer('estimation')->nullable();
            $table->string('phone')->nullable()->change();
            $table->boolean('is_read')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(self::TABLE, function (Blueprint $table) {
            $table->dropColumn('songs');
            $table->dropColumn('instruments');
            $table->dropColumn('estimation');
            $table->string('phone')->change();
            $table->boolean('is_read')->change();
        });
    }
};
