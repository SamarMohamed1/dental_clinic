<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillOfVisitProceduresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_of_visit_procedures', function (Blueprint $table) {
            $table->bigInteger('visitId')->unsigned();
            $table->foreign('visitId')->references('id')->on('visits');
            $table->bigInteger('billId')->unsigned();
            $table->foreign('billId')->references('id')->on('bills');
            $table->string('procedureName');
            $table->foreign('procedureName')->references('name')->on('procedures');
            $table->primary(array('visitId','billId','procedureName'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_of_visit_procedures');
    }
};
