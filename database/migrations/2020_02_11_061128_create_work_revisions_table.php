<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkRevisionsTable extends Migration
{
    public function up() {
        if (!Schema::hasTable('work_revisions')) {
            Schema::create('work_revisions', function (Blueprint $table) {
                createDefaultRevisionsTableFields($table, 'work');
            });
        }
    }

    public function down() {
        Schema::dropIfExists('work_revisions');
    }
}
