<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model DiscoveredSwitch
 */
class DiscoveredSwitch extends BaseModel
{
    /** @var boolean */
    public bool $adopted;
    /** @var mixed */
    public $ap_redundancy;
    /** @var mixed */
    public $aps;
    /** @var mixed */
    public $chassis_id;
    /** @var boolean */
    public bool $for_site;
    /** @var string */
    public string $model;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $system_desc;
    /** @var string */
    public string $system_name;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $vendor;
    /** @var string */
    public string $version;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}