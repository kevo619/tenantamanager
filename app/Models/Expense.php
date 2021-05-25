<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tenant;

class Expense extends Model
{
    use HasFactory;
    protected $table = 'expenses';
    public $primaryKey = 'id';

    protected $fillable = [
        'name',
        'category',
        'amount',
        'date_added',
        'particulars',
        'tenant_id',
        'unit'
    ];
    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
