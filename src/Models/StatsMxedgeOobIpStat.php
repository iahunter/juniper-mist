<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsMxedgeOobIpStat extends BaseModel
{
    public $dns;
    public string $gateway;
    public string $gateway6;
    public string $ip;
    public string $ip6;
    public string $netmask;
    public string $netmask6;
    public $type;
    public $type8;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}