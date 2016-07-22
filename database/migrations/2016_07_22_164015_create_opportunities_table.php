<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('opportunities'))
		
			Schema::create ('opportunities', function (Blueprint $table)
			{
				$table->increments ('id');
                $table->boolean('status');
				$table->string ('location');
				$table->string ('title');
				$table->string ('description');
                $table->string ('requirements');
                $table->string ('skills');
                $table->string ('nice_to_have');
                $table->string ('perks');
				$table->integer('created_by')->unsigned();
                $table->foreign('created_by')->references('id')->on('users');

				$table->softDeletes ();
				$table->timestamps ();
			});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists ('opportunities');
    }
}
