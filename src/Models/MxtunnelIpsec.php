<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class MxtunnelIpsec extends BaseModel
{
    public $dns_servers;
    public $dns_suffix;
    public bool $enabled;
    public $extra_routes;
    public bool $split_tunnel;
    public bool $use_mxedge;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}