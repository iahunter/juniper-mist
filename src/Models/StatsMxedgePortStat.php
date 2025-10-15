<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsMxedgePortStat extends BaseModel
{
    public bool $full_duplex;
    public string $mac;
    public $rx_bytes;
    public int $rx_errors;
    public $rx_pkts;
    public int $speed;
    public string $state;
    public $tx_bytes;
    public int $tx_errors;
    public $tx_pkts;
    public bool $up;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}