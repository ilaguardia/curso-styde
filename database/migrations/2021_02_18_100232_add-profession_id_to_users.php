<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfessionIdToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
	    $table->dropColumn('profession');
            $table->bigInteger('profession_id')->unsigned()->after('email_verified_at')->nullable();
            $table->foreign('profession_id')->references('id')->on('professions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
	    $table->dropForeign(['profession_id']);
            $table->dropColumn('profession_id');
            $table->string('profession', 200)->nullable();
        });
    }
}
