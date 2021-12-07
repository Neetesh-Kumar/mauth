<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('reg_img');
            $table->string('user_id');
            $table->string('reg_password');
            $table->string('reg_fname');
            $table->string('reg_lname');
            $table->string('reg_sonof');
            $table->string('reg_grandchild');
            $table->string('reg_education');
            $table->string('reg_address');
            $table->string('reg_work');
            $table->string('reg_work_address');
            $table->string('reg_nic');
            $table->date('reg_datebirth');
            $table->integer('reg_number'); 
            $table->integer('reg_landline'); 
            $table->string('reg_wife'); 
            $table->string('reg_daughter'); 
            $table->string('reg_grand_daughter'); 
            $table->string('reg_childerns');  
            $table->string('reg_child1_name'); 
            $table->integer('reg_child1_age'); 
            $table->string('reg_child1_education');
            $table->string('reg_child1_nic');
            $table->string('reg_child1_marital');
            $table->string('reg_child2_name'); 
            $table->integer('reg_child2_age'); 
            $table->string('reg_child2_education');
            $table->string('reg_child2_nic');
            $table->string('reg_child2_marital');
            $table->string('reg_child3_name');
            $table->integer('reg_child3_age');
            $table->string('reg_child3_education');
            $table->string('reg_child3_nic');
            $table->string('reg_child3_marital');
            $table->string('reg_child4_name');
            $table->integer('reg_child4_age');
            $table->string('reg_child4_education');
            $table->string('reg_child4_nic');
            $table->string('reg_child4_marital');
            $table->string('reg_child5_name');
            $table->integer('reg_child5_age');
            $table->string('reg_child5_education');
            $table->string('reg_child5_nic');
            $table->string('reg_child5_marital');
            $table->string('reg_child6_name');
            $table->integer('reg_child6_age');
            $table->string('reg_child6_education');
            $table->string('reg_child6_nic');
            $table->string('reg_child6_marital');
            $table->string('reg_child7_name');
            $table->integer('reg_child7_age');
            $table->string('reg_child7_education');
            $table->string('reg_child7_nic');
            $table->string('reg_child7_marital');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
