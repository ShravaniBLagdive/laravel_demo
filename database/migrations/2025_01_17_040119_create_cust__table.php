<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cust_', function (Blueprint $table) {
            
            $table->id(); //admin id auto-increment
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->enum('gender',['male','female']);
            $table->integer('city_id');
            $table->longText('address')->nullable();
            $table->bigInteger('mob_no')->nullable();
            $table->tinyInteger('type')->default(1)->comment('1=>admin, 2=>super admin, 3=>sales admin');
            $table->boolean('is_active')->default(0);
            $table->date('dob');
            $table->timestamp('start_date');//created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cust_');
    }
};
