<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Workout::class, 'workout_id')->constrained();
            $table->foreignIdFor(\App\Models\WorkoutWeek::class, 'workout_week_id')->constrained();
            $table->float('massimale')->default(0);
            $table->float('percentuale')->default(0);
            $table->float('effettivo')->default(0);
            $table->float('quantity')->default(0);
            $table->float('executed')->default(0);
            $table->boolean('freestyle')->default(false);
            $table->boolean('max')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargos');
    }
};
