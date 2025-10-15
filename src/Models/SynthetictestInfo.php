<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SynthetictestInfo extends BaseModel
{
    public string $by;
    public $device_type;
    public bool $failed;
    public int $latency;
    public string $mac;
    public string $port_id;
    public string $reason;
    public int $rx_mbps;
    public int $start_time;
    public string $status;
    public $timestamp;
    public int $tx_mbps;
    public $type;
    public int $vlan_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}