<?php

use App\Models\Bilhete;
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
        Schema::create('info_bilhetes', function (Blueprint $table) {
            $table->id();
            $table->decimal("price", 10,2);
            $table->json("regalias")->nullable();
            $table->foreignIdFor(Bilhete::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_bilhetes');
    }
};
