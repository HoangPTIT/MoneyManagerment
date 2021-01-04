<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReceivedToReceivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('receives', function (Blueprint $table) {
            $table->double('received')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('receives', function (Blueprint $table) {
            if (Schema::hasColumn('receives', 'received')) {
                $table->dropColumn('received');
            }
        });
    }
}
