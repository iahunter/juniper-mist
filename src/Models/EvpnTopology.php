<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model EvpnTopology
 */
class EvpnTopology extends BaseModel
{
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $evpn_options;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;
    /** @var boolean */
    public bool $overwrite;
    /** @var object */
    public $pod_names;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $switch_configs;
    /** @var mixed */
    public $switches;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}