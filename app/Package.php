<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';
    protected $fillable = [
        'tourPackage',
        'dateOfArrival',
        'dateOfDeparture',
        'adults',
        'childrenBetweenFiveAndEleven',
        'childrenUnderFive',
        'numberOfRooms',
        'kindOfAccommodation',
        'specialRequests',
        'name',
        'address',
        'phone',
        'email'
    ];
}
