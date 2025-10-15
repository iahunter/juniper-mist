<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class AccountPrismaConfig extends BaseModel
{
    public string $auto_probe_subnet;
    public string $client_id;
    public string $client_secret;
    public bool $enable_probe;
    public string $tsg_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}