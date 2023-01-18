<?php

namespace Cms\Modules\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reward extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'rewards';

    protected $fillable = [
        'receiver_name',
        'bank_number',
        'bank_name',
        'reward',
        'sender_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

}
