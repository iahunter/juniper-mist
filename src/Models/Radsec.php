<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Radsec extends BaseModel
{
    public bool $coa_enabled;
    public bool $enabled;
    public $idle_timeout;
    public $mxcluster_ids;
    public $proxy_hosts;
    public string $server_name;
    public $servers;
    public bool $use_mxedge;
    public bool $use_site_mxedge;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}