<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('childs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',500);
            $table->bigInteger('relationship_id')->unsigned();
            $table->foreign('relationship_id')->references('id')->on('relationships')->onDelete('cascade');
            $table->date('date_of_birth');
            $table->string('education',500);
            $table->string('marital_status',500);
            $table->bigInteger('parent_id')->unsigned();

            $table->foreign('parent_id')->references('id')->on('parents')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('childs');
    }
}
