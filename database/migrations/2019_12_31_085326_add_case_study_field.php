<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCaseStudyField extends Migration
{
    public function up()
    {
        if (Schema::hasTable('works') && !Schema::hasColumn('works', 'casestudy')) {
            Schema::table('works', function (Blueprint $table) {
                $table->text('casestudy')->nullable();
            });
        }

        if (Schema::hasTable('work_translations') && !Schema::hasColumn('work_translations', 'casestudy')) {
            Schema::table('work_translations', function (Blueprint $table) {
                $table->text('casestudy')->nullable();
            });
        }

    }

    public function down()
    {
        if (Schema::hasTable('works') && Schema::hasColumn('works', 'casestudy')) {
            Schema::table('works', function (Blueprint $table) {
                $table->dropColumn('casestudy');
            });
        }

        if (Schema::hasTable('work_translations') && Schema::hasColumn('work_translations', 'casestudy')) {
            Schema::table('work_translations', function (Blueprint $table) {
                $table->dropColumn('casestudy');
            });
        }
    }
}
