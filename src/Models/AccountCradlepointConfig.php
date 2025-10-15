<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class AccountCradlepointConfig extends BaseModel
{
    public string $cp_api_id;
    public string $cp_api_key;
    public string $ecm_api_id;
    public string $ecm_api_key;
    public bool $enable_lldp;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}