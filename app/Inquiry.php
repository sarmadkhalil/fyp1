<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Customer;
use OwenIt\Auditing\Contracts\Auditable;

class Inquiry extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'inquiry';
    public function product(){
        return $this->hasMany(Product::class);
    }
    public function Customer(){
        return $this->belongsTo(Customer::class);
    }
    protected $fillable= ['name', 'description', 'customer_id', 'product_id','quantity',];
}
