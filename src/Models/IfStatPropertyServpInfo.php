<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model IfStatPropertyServpInfo
 */
class IfStatPropertyServpInfo extends BaseModel
{
    /** @var string */
    public string $asn;
    /** @var string */
    public string $city;
    /** @var string */
    public string $country_code;
    /** @var number */
    public float $latitude;
    /** @var number */
    public float $longitude;
    /** @var string */
    public string $org;
    /** @var string */
    public string $region_code;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}