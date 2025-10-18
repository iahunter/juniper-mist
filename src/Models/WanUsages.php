<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WanUsages
 */
class WanUsages extends BaseModel
{
    /** @var string */
    public string $mac;
    /** @var string */
    public string $path_type;
    /** @var integer */
    public int $path_weight;
    /** @var string */
    public string $peer_mac;
    /** @var string */
    public string $peer_port_id;
    /** @var string */
    public string $policy;
    /** @var string */
    public string $port_id;
    /** @var string */
    public string $tenant;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}