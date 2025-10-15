<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SwitchRadiusConfig extends BaseModel
{
    public bool $acct_immediate_update;
    public int $acct_interim_interval;
    public $acct_servers;
    public $auth_server_selection;
    public $auth_servers;
    public int $auth_servers_retries;
    public int $auth_servers_timeout;
    public bool $coa_enabled;
    public $coa_port;
    public bool $fast_dot1x_timers;
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