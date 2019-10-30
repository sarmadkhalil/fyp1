<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Customer extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'customer';
    public function inquiry(){
        return $this->hasMany(Inquiry::class);
    }
    protected $fillable= ['name', 'address', 'email', 'PNumber'];
}
