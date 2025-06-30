<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInboxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inbox', function (Blueprint $table) {
            $table->id(); // Equivalent to 'id' INT(11) AUTO_INCREMENT PRIMARY KEY
            $table->string('name', 255); // varchar(255) - The image shows varchar(32) but 255 is more common for names. Adjust if needed.
            $table->string('email', 255); // varchar(255) - The image shows varchar(54) but 255 is more common for emails. Adjust if needed.
            $table->text('message'); // text
            $table->timestamp('created_at')->nullable(); // datetime, nullable
            $table->timestamp('updated_at')->nullable(); // datetime, nullable
            // The image shows 'email' as a unique index.
            $table->unique('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inbox');
    }
}