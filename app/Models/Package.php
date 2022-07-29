<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'packageName','customerName','customerNumber','customerAddress','deliveryEmail','deliveryName','deliveryNumber','deliveryAddress','deliveryState','deliveryCountry','packageNumber','packageWeight', 'trackNumber' , 'status'

    ] ;

    public function locations(){
        return $this->hasMany(Location::class);
    }
    public function getLocationsAttribute()
    {
        $locations = $this->locations()->getQuery()->orderBy('created_at', 'desc')->get();
        return $locations;
    }

    public function getPackageAttribute()
    {
        $package = $this->getQuery()->orderBy('created_at', 'desc')->get();
        return $package;
    }
}
