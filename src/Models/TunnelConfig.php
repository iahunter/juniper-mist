<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class TunnelConfig extends BaseModel
{
    public $auto_provision;
    public int $ike_lifetime;
    public $ike_mode;
    public $ike_proposals;
    public int $ipsec_lifetime;
    public $ipsec_proposals;
    public string $local_id;
    public $local_subnets;
    public $mode;
    public $networks;
    public $primary;
    public $probe;
    public $protocol;
    public $provider;
    public string $psk;
    public $remote_subnets;
    public $secondary;
    public $version;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}