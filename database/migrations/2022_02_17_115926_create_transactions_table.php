<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('uuid');
            $table->string('reference_code');
            $table->string('amount');
            $table->string('recipentName');
            $table->longText('purpose');
            $table->string('phone');
            $table->string('email');
            $table->string('method');
            $table->enum('status',[
                'NOT_RECEIVED',
                'RECEIVED',
                'PROCESSING',
                'SENT'
            ]);
            $table->uuid('currency_id');
            $table->string('bank')->nullable();
            $table->string('bankAccountNo')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
