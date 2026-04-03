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
        Schema::create('transactions', function (Blueprint $blueprint) {
            $blueprint->id();
            $blueprint->string('type'); // gelir, gider
            $blueprint->string('category')->nullable(); // malzeme, isçilik, yakit, vb.
            $blueprint->decimal('amount', 12, 2);
            $blueprint->text('description')->nullable();
            $blueprint->date('date');
            $blueprint->unsignedBigInteger('work_order_id')->nullable(); // optional link to a job
            $blueprint->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
