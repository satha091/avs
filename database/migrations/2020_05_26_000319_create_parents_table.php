<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('parents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',500);
            $table->string('father_name',500);
            $table->date('date_of_birth');
            $table->integer('age');
            $table->string('blood_group',50);
            $table->string('photo',500);
            $table->string('native_place',500);
            $table->text('district',500);
            $table->string('ancestry',500);
            $table->text('address');
            $table->string('telephone',100);
            $table->string('cell_no');
            $table->string('email',500)->unique();
            $table->string('job_details',500);
            $table->string('job_description',500);
            $table->string('designation',500);
            $table->string('company_name',500);
            $table->text('company_address');
            $table->string('company_telephone',100);
            $table->string('company_cell_no');
            $table->string('company_email',500);
            $table->string('qualification',500);
            $table->string('wife_name',500);
            $table->string('wife_native_place',500);
            $table->string('wife_ancestry',500);
            $table->integer('no_male_child');
            $table->integer('no_female_child');
            $table->string('uid',500)->unique();
            $table->integer('created_by');
            $table->integer('updated_by');
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
        Schema::dropIfExists('parents');

    }
}
