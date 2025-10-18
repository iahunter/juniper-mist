<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MxtunnelIpsec
 */
class MxtunnelIpsec extends BaseModel
{
    /** @var mixed */
    public $dns_servers;
    /** @var mixed */
    public $dns_suffix;
    /** @var boolean */
    public bool $enabled;
    /** @var mixed */
    public $extra_routes;
    /** @var boolean */
    public bool $split_tunnel;
    /** @var boolean */
    public bool $use_mxedge;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}