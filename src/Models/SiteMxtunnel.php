<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteMxtunnel
 */
class SiteMxtunnel extends BaseModel
{
    /** @var mixed */
    public $additional_mxtunnels;
    /** @var mixed */
    public $ap_subnets;
    /** @var mixed */
    public $auto_preemption;
    /** @var mixed */
    public $clusters;
    /** @var mixed */
    public $created_time;
    /** @var boolean */
    public bool $enabled;
    /** @var boolean */
    public bool $for_site;
    /** @var integer */
    public int $hello_interval;
    /** @var integer */
    public int $hello_retries;
    /** @var mixed */
    public $hosts;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $modified_time;
    /** @var integer */
    public int $mtu;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $protocol;
    /** @var mixed */
    public $radsec;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $vlan_ids;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}