<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WlanAppQosOthersItem extends BaseModel
{
    public $dscp;
    public string $dst_subnet;
    public string $port_ranges;
    public string $protocol;
    public string $src_subnet;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}