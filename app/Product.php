<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Supplier;
use App\Inquiry;
use OwenIt\Auditing\Contracts\Auditable;

class Product extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    public function inquiries(){
        return $this->hasMany(Inquiry::class);
    }
    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
    protected $fillable= ['name', 'description', 'costperprod', 'supplier_id'];
}
