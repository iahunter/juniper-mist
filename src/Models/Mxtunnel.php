<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Mxtunnel extends BaseModel
{
    public $anchor_mxtunnel_ids;
    public $auto_preemption;
    public $created_time;
    public bool $for_site;
    public int $hello_interval;
    public int $hello_retries;
    public $id;
    public $ipsec;
    public $modified_time;
    public int $mtu;
    public $mxcluster_ids;
    public string $name;
    public $org_id;
    public $protocol;
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