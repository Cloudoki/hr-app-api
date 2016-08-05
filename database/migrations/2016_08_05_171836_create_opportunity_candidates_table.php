<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpportunityCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if (!Schema::hasTable('opportunity_candidates'))
		
			Schema::create ('opportunity_candidates', function (Blueprint $table)
			{
				$table->increments ('id');
                $table->integer('opportunity_id')->unsigned();
                $table->foreign('opportunity_id')->references('id')->on('opportunities');
				$table->string ('message');
                $table->string ('cv');
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
        Schema::dropIfExists ('opportunity_candidates');
    }
}
