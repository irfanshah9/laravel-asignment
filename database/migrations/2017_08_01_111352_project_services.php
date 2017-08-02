<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('project_services', function (Blueprint $table) {
		    $table->increments('id');
            $table->string('services',100)->index();
            $table->string('project_idFK',11);
            $table->timestamp('created_at')->nullable();
			  $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('project_services');
    }
}
