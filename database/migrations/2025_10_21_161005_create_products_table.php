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
        Schema::create('products', function (Blueprint $table) {
            $table->id();       
            $table->foreignId('laboratory_id')->nullable()->constrained('laboratories');
            $table->foreignId('presentation_id')->nullable()->constrained('presentations');
            $table->foreignId('line_id')->nullable()->constrained('lines');
     
            $table->string('code')->nullable();
            $table->string('nameTrade')->nullable();
            $table->string('nameGeneric')->nullable();

            $table->numeric('availableStock')->nullable();

            $table->text('label')->nullable();
            $table->text('observation')->nullable();
            $table->string('image',600)->nullable();     
            
            $table->smallInteger('status')->default(1);

            $table->timestamps();            
            $table->foreignId('registerUser_id')->nullable()->constrained('users');
            $table->string('registerRole')->nullable();

            $table->softDeletes();
            $table->foreignId('deleteUser_id')->nullable()->constrained('users');
            $table->string('deleteRole')->nullable();
            $table->text('deleteObservation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
