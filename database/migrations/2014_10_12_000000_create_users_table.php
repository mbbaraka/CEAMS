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
            $table->string('staff_id');
            $table->primary('staff_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('avator')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('dob')->nullable();
            $table->string('department')->nullable();
            $table->string('faculty')->nullable();
            $table->string('job_title')->nullable();
            $table->string('salary_scale')->nullable();
            $table->string('appointment_date')->nullable();
            $table->string('terms_of_service')->nullable();
            $table->enum('is_appraiser', ['0','1']);
            $table->string('appraiser_status')->nullable();
            $table->string('role')->nullable();
            $table->enum('status', ['0','1']);
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
        Schema::dropIfExists('users');
    }
}
