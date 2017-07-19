<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    protected $fillable = array(
        "name",
        "email",
        "ipv4_address",
        "ipv6_address",
        "ip_location",
        "stack"
    );
}
