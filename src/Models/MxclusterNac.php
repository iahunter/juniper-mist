<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class MxclusterNac extends BaseModel
{
    public int $acct_server_port;
    public int $auth_server_port;
    public array $client_ips;
    public bool $enabled;
    public string $secret;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}