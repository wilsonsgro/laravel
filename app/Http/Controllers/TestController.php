<?php

namespace App\Http\Controllers;

use App\Services\Geolocation;
use App\Services\Satellite;
use Illuminate\Http\Request;

class TestController extends Controller
{
    protected $geolocation;
    protected $satellite;

    public function __construct(Geolocation $geolocation, Satellite $satellite)
    {
        $this->geolocation = $geolocation;
        $this->satellite = $satellite;
    }

    public function getNames(): string
    {
        $dati = $this->geolocation->getNames();
        $dati2 = $this->satellite->getName();
        return $dati . " - ". $dati2;
    }
}
