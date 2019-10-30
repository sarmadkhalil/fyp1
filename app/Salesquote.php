<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Customer;
use OwenIt\Auditing\Contracts\Auditable;

class Salesquote extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'salesqoute';
    public function customers(){
        return $this->belongsTo(Customer::class);
    }
    protected $fillable= ['user_id', 'description','inquiry_id','total'];
}
