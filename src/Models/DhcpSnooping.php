<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class DhcpSnooping extends BaseModel
{
    public bool $all_networks;
    public bool $enable_arp_spoof_check;
    public bool $enable_ip_source_guard;
    public bool $enabled;
    public $networks;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}