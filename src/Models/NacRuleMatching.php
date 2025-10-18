<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model NacRuleMatching
 */
class NacRuleMatching extends BaseModel
{
    /** @var mixed */
    public $auth_type;
    /** @var mixed */
    public $family;
    /** @var mixed */
    public $mfg;
    /** @var mixed */
    public $model;
    /** @var mixed */
    public $nactags;
    /** @var mixed */
    public $os_type;
    /** @var mixed */
    public $port_types;
    /** @var mixed */
    public $site_ids;
    /** @var mixed */
    public $sitegroup_ids;
    /** @var mixed */
    public $vendor;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}