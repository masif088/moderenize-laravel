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
        Schema::create('cooperatives', function (Blueprint $table) {
            $table->id();
            $table->date('date_transaction');
            $table->string('title');
            $table->decimal('debit', 16, 2);
            $table->decimal('credit', 16, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cooperatives');
    }
};
