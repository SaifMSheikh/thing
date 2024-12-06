<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->string('name')->after('id'); // Adds 'name' column
            $table->text('description')->nullable()->after('name'); // Adds 'description' column
            $table->decimal('price', 10, 2)->nullable()->after('description'); // Adds 'price' column
        });
    }
    
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['name', 'description', 'price']); // Drops all three columns
        });
    }
    };
