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
        Schema::create('job_application1s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('receiver');
            $table->string('sender');
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
