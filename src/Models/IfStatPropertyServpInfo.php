<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class IfStatPropertyServpInfo extends BaseModel
{
    public string $asn;
    public string $city;
    public string $country_code;
    public float $latitude;
    public float $longitude;
    public string $org;
    public string $region_code;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}