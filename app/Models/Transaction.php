<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
    protected $table='transaction';
    protected $fillable=[
        'date',
        'transaction_date',
        'status',
        'debit',
        'credit',
        'amount',
        'fees',
        'commission',
        'billid',
        'channel',
        'description',
        'biller_id',
        'product_id',  
        '-agent_id',
        'client_id',
        'device_id',
        'employee_id',
        'source',
        'destination',
        'accounts_id',
        'users_id',
        'transaction_types_id',
        'counter_transaction_id',
        'balance',
        'payment_channels_id',
        'card_id',
        'status_counter',
        'api_data',
        'terminal_id',
        'capture_method',
        'currency',
        'acquire_response_code',
        'acquire_response_description',
        'agent_name',
        'agent_account',
        'association',
        'provider',
        'app_version',
        'pos_type',
        'tax',
        'acquire_remote_reference',
        'operator_session',
        'origin',
        'other_description',
        'reference'
    ];
}
