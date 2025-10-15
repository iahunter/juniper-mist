<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class EventFastroam extends BaseModel
{
    public string $ap_mac;
    public string $client_mac;
    public string $fromap;
    public float $latency;
    public string $ssid;
    public string $subtype;
    public $timestamp;
    public $type;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}