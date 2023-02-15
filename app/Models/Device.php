<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{    
    protected $table = 'device';
    protected $fillable=[
    'imei',
    'status',
    'name',
    'first_use',
    'last_use',
    'version',
    'pos_sim_number',
    'activation_code',
    'activation_tries',
    'agent_id',
    'client_id',
    'dedicated',
    'encryption_key', 
    'supervisor_id',
    'terminal_id',
    'imsi_sim',
    'serial_number',
    'pos_type',
    'transaction_count',
    'usd_terminal_id'
];
}
