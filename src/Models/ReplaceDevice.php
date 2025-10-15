<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ReplaceDevice extends BaseModel
{
    public $discard;
    public string $inventory_mac;
    public string $mac;
    public string $site_id;
    public $tunterm_port_config;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}