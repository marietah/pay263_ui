<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date')->nullable();
            $table->timestamp('transaction_date')->nullable();
            $table->string('status')->nullable()->comment('this is for use with transactions such as adustments whereby a transaction enters different states and those states determine how the transaction is completed');
            $table->decimal('debit', 15,5)->default(0.00000);
            $table->decimal('credit', 15,5)->default(0.00000);
            $table->decimal('amount', 15,5)->default(0.00000);
            $table->decimal('fees', 15,5)->default(0.00000);
            $table->decimal('commission', 15,5)->default(0.00000);
            $table->string('billid', 64)->commment('refers to any reference pertaining to that transaction internally or externally');
            $table->decimal('channel',32)->nullable();
            $table->string('description')->nullable();
            $table->integer('biller_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('agent_id')->nullable();
            $table->integer('client_id')->nullable();
            $table->integer('device_id')->nullable();
            $table->integer('employee_id')->nullable();
            $table->string('source',128)->nullable();
            $table->string('destination',128)->nullable();
            $table->integer('accounts_id')->nullable();
            $table->integer('users_id')->nullable();
            $table->integer('transaction_types_id')->nullable(false);
            $table->integer('counter_transaction_id')->nullable()->comment('the corresponding debit or debit');
            $table->decimal('balance', 15,5)->default(0.00000)->nullable()->comment('this is the running balance after the transaction on the respective deposit account');
            $table->integer('payment_channels_id')->nullable();
            $table->integer('card_id')->nullable();
            $table->integer('status_counter')->nullable()->default(0);
            $table->string('api_data',4096)->nullable();
            $table->string('terminal_id', 16)->nullable();
            $table->string('capture_method' ,32)->nullable();
            $table->string('currency' , 16)->nullable();
            $table->string('acquire_response_code' ,4)->nullable();
            $table->string('acquire_response_description' ,1048)->nullable();
            $table->string('agent_name', 64)->nullable();
            $table->string('agent_account', 32)->nullable();
            $table->string('association', 64)->nullable()->comment('This is the bank associated with the card number(bin) in the list of card_bins');
            $table->string('provider', 64)->nullable();
            $table->string('app_version', 32)->nullable();
            $table->string('pos_type', 16)->nullable();
            $table->decimal('tax', 15,5)->nullable();
            $table->string('acquire_remote_reference', 45)->nullable();
            $table->string('operator_session', 64)->nullable();
            $table->string('origin', 32)->nullable();
            $table->string('other_description', 16)->nullable();
            $table->string('reference', 64)->nullable();
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
        Schema::dropIfExists('transaction');
    }
}
