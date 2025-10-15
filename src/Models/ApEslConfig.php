<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ApEslConfig extends BaseModel
{
    public string $cacert;
    public int $channel;
    public bool $enabled;
    public string $host;
    public int $port;
    public $type;
    public bool $verify_cert;
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