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
        Schema::create('parent', function (Blueprint $table) {
            $table->integer('parent_id');
            $table->string('email', length:45);
            $table->string('password', length:45);
            $table->string('fname', length:45);
            $table->string('lname', length:45);
            $table->date('dob');
            $table->string('phone', length:15);
            $table->string('mobile', length:15);
            $table->boolean('status');
            $table->date('last_login_date');
            $table->string('last_login_ip', length:45);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parent');
    }
};
