<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class RadiusConfig extends BaseModel
{
    public int $acct_interim_interval;
    public $acct_servers;
    public $auth_servers;
    public int $auth_servers_retries;
    public int $auth_servers_timeout;
    public bool $coa_enabled;
    public int $coa_port;
    public string $network;
    public string $source_ip;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}