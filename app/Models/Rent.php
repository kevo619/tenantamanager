<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tenant;

class Rent extends Model
{
    use HasFactory;
    protected $table = 'rents';
    public $primaryKey = 'id';
    protected $fillable = [
        'amount_paid',
        'date_paid',
        'tenant_id',
    ];
    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
