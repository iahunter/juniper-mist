<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class MxclusterRadsec extends BaseModel
{
    public $acct_servers;
    public $auth_servers;
    public bool $enabled;
    public bool $match_ssid;
    public $nas_ip_source;
    public $proxy_hosts;
    public $server_selection;
    public $src_ip_source;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}