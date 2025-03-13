<?php

namespace App\Services;

use App\Services\Map;
use App\Services\Satellite;

class Geolocation
{
    protected $map;
    protected $satellite;

    public function __construct(Map $map, Satellite $satellite)
    {
        $this->map = $map;
        $this->satellite = $satellite;
    }

    public function getNames(): string
    {
        $data = [
            $this->map->getName(),
            $this->satellite->getName()
        ];

        return json_encode($data);
    }
}
