<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class EventsSkyatp extends BaseModel
{
    public string $device_mac;
    public bool $for_site;
    public string $ip;
    public string $mac;
    public $org_id;
    public $site_id;
    public int $threat_level;
    public $timestamp;
    public string $type;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}