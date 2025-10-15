<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class AppProbingCustomApp extends BaseModel
{
    public string $address;
    public string $app_type;
    public $hostnames;
    public string $key;
    public string $name;
    public string $network;
    public int $packetSize;
    public $protocol;
    public string $url;
    public string $vrf;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}