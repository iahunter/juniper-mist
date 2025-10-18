<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteMxtunnelAdditionalMxtunnel
 */
class SiteMxtunnelAdditionalMxtunnel extends BaseModel
{
    /** @var mixed */
    public $clusters;
    /** @var integer */
    public int $hello_interval;
    /** @var integer */
    public int $hello_retries;
    /** @var mixed */
    public $protocol;
    /** @var mixed */
    public $vlan_ids;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}