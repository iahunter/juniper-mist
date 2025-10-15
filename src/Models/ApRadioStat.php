<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ApRadioStat extends BaseModel
{
    public $bandwidth;
    public int $channel;
    public bool $dynamic_chaining_enabled;
    public string $mac;
    public int $noise_floor;
    public int $num_clients;
    public int $num_wlans;
    public int $power;
    public $rx_bytes;
    public $rx_pkts;
    public $tx_bytes;
    public $tx_pkts;
    public string $usage;
    public int $util_all;
    public int $util_non_wifi;
    public int $util_rx_in_bss;
    public int $util_rx_other_bss;
    public int $util_tx;
    public int $util_undecodable_wifi;
    public int $util_unknown_wifi;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}