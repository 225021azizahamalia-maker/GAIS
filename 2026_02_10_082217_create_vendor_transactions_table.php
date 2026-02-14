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
        Schema::create('vendor_transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('vendor_transactions', function (Blueprint $table) {
    $table->id();

    $table->foreignId('vendor_id')
          ->constrained()
          ->cascadeOnDelete();

    $table->text('description')->nullable();
    $table->decimal('amount', 15, 2);
    $table->date('transaction_date');
    $table->text('notes')->nullable();
    $table->timestamp('created_at')->useCurrent();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendor_transactions');
    }
};
