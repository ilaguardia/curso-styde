<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('surname', 50)->nullable();
            $table->string('dni')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('telephone', 14)->nullable();
            $table->string('emergency_contact', 14)->nullable();
            $table->string('emergency_telephone', 14)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('address', 50)->nullable();
            $table->string('cp', 5)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('province', 50)->nullable();
            $table->string('profession', 200)->nullable();
            $table->string('known_by', 50)->nullable();
            
            // $table->integer('certification_id')->length(10)->unsigned();
            
            $table->string('dives', 5)->nullable();
            $table->string('insurance_company', 20)->nullable();
            $table->date('insurance_end_date')->nullable();
            $table->boolean('mailing_list')->nullable();
            $table->boolean('allow_photos')->nullable();
            $table->string('friend_of', 50)->nullable();
            $table->date('first_visit_date')->nullable();
            $table->string('password');
            $table->rememberToken();
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
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('users');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
