<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rent;

class Tenant extends Model
{
    use HasFactory;
    protected $table = 'tenants';
    public $primaryKey = 'id';

    protected $fillable = [
        'id_number',
        'first_name',
        'last_name',
        'unit'
    ];
    public function getFullName()
    {
        return "{$this->first_name} {$this->last_name}";
    }
    public function rent()
    {
        return $this->hasMany(Rent::class);
    }
}
