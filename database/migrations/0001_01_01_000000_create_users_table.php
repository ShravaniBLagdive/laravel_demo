<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// $table->id(); //admin id auto-increment
//             $table->string('first_name');
//             $table->string('last_name')->nullable();
//             $table->string('email')->unique();
//             $table->enum('gender',['male','female']);
//             $table->integer('city_id');
//             $table->longText('address')->nullable();
//             $table->bigInteger('mob_no')->nullable();
//             $table->tinyInteger('type')->default(1)->comment('1=>admin, 2=>super admin, 3=>sales admin');
//             $table->boolean('is_active')->default(0);
//             $table->date('dob');
//             $table->timestamp('start_date');//created_at and updated_at

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
