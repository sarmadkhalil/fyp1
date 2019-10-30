<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use App\Product;
use OwenIt\Auditing\Contracts\Auditable;

class Supplier extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    public function products(){
        return $this->hasMany(Product::class);
    }
    protected $fillable= ['name', 'address', 'PNumber'];
=======

class Supplier extends Model
{
    //
>>>>>>> 034f624a8f90e69bcb845dd7deb2a2130fe5410f
}
