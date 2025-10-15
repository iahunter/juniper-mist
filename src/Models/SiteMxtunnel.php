<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SiteMxtunnel extends BaseModel
{
    public $additional_mxtunnels;
    public $ap_subnets;
    public $auto_preemption;
    public $clusters;
    public $created_time;
    public bool $enabled;
    public bool $for_site;
    public int $hello_interval;
    public int $hello_retries;
    public $hosts;
    public $id;
    public $modified_time;
    public int $mtu;
    public $org_id;
    public $protocol;
    public $radsec;
    public $site_id;
    public $vlan_ids;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}