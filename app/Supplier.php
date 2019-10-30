<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use OwenIt\Auditing\Contracts\Auditable;

class Supplier extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    public function products(){
        return $this->hasMany(Product::class);
    }
    protected $fillable= ['name', 'address', 'PNumber'];
}
