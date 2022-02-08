<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('phone')->index();
            $table->string('title')->fulltext();
            $table->string('address')->fulltext();
            $table->string('description', 2048)->nullable()->fulltext();
            $table->string('paid_description')->nullable()->fulltext();

            $table->boolean('urgency')->default(false);
            $table->boolean('is_available')->default(true);
            $table->boolean('is_sold')->default(false);
            $table->unsignedBigInteger('price')->default(0)->index();
            $table->float('commission')->nullable();

            $table->timestamp('deadline')->nullable();
            $table->timestamps();

            $table->foreignId('province_id')->constrained()->nullOnDelete();
            $table->foreignId('category_id')->constrained()->nullOnDelete();
            $table->foreignId('author_id')->constrained('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
