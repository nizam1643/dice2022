<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyPayment extends Model
{
    use HasFactory;

    protected $table = 'my_payments';

    protected $fillable = [
        'user_id',
        'company_slug',
        'item_id',
        'item_type',
        'price',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
