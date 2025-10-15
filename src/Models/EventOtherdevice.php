<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class EventOtherdevice extends BaseModel
{
    public string $device_mac;
    public string $mac;
    public $org_id;
    public $site_id;
    public string $text;
    public $timestamp;
    public string $type;
    public string $vendor;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}