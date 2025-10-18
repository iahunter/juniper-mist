<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteMxtunnelCluster
 */
class SiteMxtunnelCluster extends BaseModel
{
    /** @var string */
    public string $name;
    /** @var mixed */
    public $tunterm_hosts;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}