<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model DiscoveredSwitchMetric
 */
class DiscoveredSwitchMetric extends BaseModel
{
    /** @var boolean */
    public bool $adopted;
    /** @var mixed */
    public $aps;
    /** @var mixed */
    public $chassis_id;
    /** @var string */
    public string $hostname;
    /** @var string */
    public string $mgmt_addr;
    /** @var string */
    public string $model;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $scope;
    /** @var integer */
    public int $score;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $system_desc;
    /** @var string */
    public string $system_name;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $type;
    /** @var string */
    public string $vendor;
    /** @var string */
    public string $version;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}