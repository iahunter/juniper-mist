<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SsoMxedgeProxy extends BaseModel
{
    public $acct_servers;
    public $auth_servers;
    public string $mxcluster_id;
    public string $operator_name;
    public $proxy_hosts;
    public $ssids;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}