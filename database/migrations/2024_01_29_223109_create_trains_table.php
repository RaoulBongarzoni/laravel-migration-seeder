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
        Schema::create('trains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("azienda");
            $table->time("partenza");
            $table->time("arrivo");
            $table->decimal("codice", $precision = 8, $scale = 0);
            $table->integer("carrozze");
            $table->integer("ritardo");

            $table->enum("cancellato", ['no'], ['si']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
