<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tenant;

class Document extends Model
{
    use HasFactory;
    protected $table = 'documents';
    public $primaryKey = 'id';

    protected $fillable = [
        'uuid',
        'name',
        'tenant_id',
    ];
    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
