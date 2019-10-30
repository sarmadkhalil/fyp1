<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use OwenIt\Auditing\Contracts\Auditable;

class Customer extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'customer';
    public function inquiry(){
        return $this->hasMany(Inquiry::class);
    }
    protected $fillable= ['name', 'address', 'email', 'PNumber'];
=======

class Customer extends Model
{
    //
>>>>>>> 034f624a8f90e69bcb845dd7deb2a2130fe5410f
}
