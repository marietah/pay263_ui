<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Transaction;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reference' => $this->faker->text(10),
            'transaction_date' => $this->faker->date,
            'terminal_id' => $this->faker->text(10),
            'agent_id' => $this->faker->numberBetween(1,10),
            'status' => $this->faker->text(10),
            'debit' => $this->faker->numberBetween(1,200000),
            'credit' => $this->faker->numberBetween(1,200000),
            'commission' => $this->faker->numberBetween(1,200000),
            'fees' => $this->faker->numberBetween(1,200000),
            'tax' => $this->faker->numberBetween(1,200000),
            'amount' =>$this->faker->numberBetween(1,200000),
            'billid'=> $this->faker->numberBetween(1,10),
            'date'=> $this->faker->date,
            'channel' => $this->faker->numberBetween(1,200000),
            'description' => $this->faker->text(20),
            'biller_id' => $this->faker->numberBetween(1,10),
            'product_id' =>$this->faker->numberBetween(1,10),
            'device_id' => $this->faker->numberBetween(1,50),
            'employee_id' =>$this->faker->numberBetween(1,50),
            'client_id' => $this->faker->numberBetween(1,50),
            'source' => $this->faker->text(10),
            'destination' => $this->faker->text(10),
            'accounts_id' => $this->faker->numberBetween(1,50),
            'users_id' => $this->faker->numberBetween(1,50),
            'transaction_types_id' => $this->faker->numberBetween(1,50),
            'counter_transaction_id' => $this->faker->numberBetween(1,50),
            'balance' => $this->faker->numberBetween(1,50),
            'payment_channels_id' => $this->faker->numberBetween(1,50),
            'card_id' => $this->faker->numberBetween(1,50),
            'status_counter' => $this->faker->numberBetween(1,50),
            'api_data' => $this->faker->text(10),
            'capture_method' => $this->faker->numberBetween(1,50),
            'currency' => $this->faker->text(10),
            'acquire_response_code' =>$this->faker->numberBetween(1,10),
            'acquire_response_description' => $this->faker->text(10),
            'agent_name' => $this->faker->text(10),
            'agent_account' => $this->faker->text(10),
            'association' => $this->faker->text(10),
            'provider' => $this->faker->text(10),
            'app_version' => $this->faker->text(10),
            'pos_type' => $this->faker->text(10),
            'acquire_remote_reference' => $this->faker->text(10),
            'operator_session' => $this->faker->text(10),
            'origin' => $this->faker->text(10),
            'other_description' => $this->faker->text(10)
        ];
    }
}
