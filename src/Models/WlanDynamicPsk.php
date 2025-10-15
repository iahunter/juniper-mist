<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WlanDynamicPsk extends BaseModel
{
    public string $default_psk;
    public $default_vlan_id;
    public bool $enabled;
    public bool $force_lookup;
    public $source;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}