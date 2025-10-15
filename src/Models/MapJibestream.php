<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class MapJibestream extends BaseModel
{
    public string $client_id;
    public string $client_secret;
    public int $customer_id;
    public string $endpoint_url;
    public string $map_id;
    public int $mmpp;
    public float $ppm;
    public $vendor_name;
    public int $venue_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}