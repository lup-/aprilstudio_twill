<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWorkClassesFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('works') && !Schema::hasColumn('works', 'line_classes')) {
            Schema::table('works', function (Blueprint $table) {
                $table->char('line_classes', 200)->nullable();
                $table->char('next_classes', 200)->nullable();
                $table->char('page_classes', 200)->nullable();
                $table->char('page_background', 200)->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('works') && Schema::hasColumn('works', 'line_classes')) {
            Schema::table('works', function (Blueprint $table) {
                $table->dropColumn('line_classes');
                $table->dropColumn('next_classes');
                $table->dropColumn('page_classes');
                $table->dropColumn('page_background');
            });
        }
    }
}
