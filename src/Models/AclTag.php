<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AclTag
 */
class AclTag extends BaseModel
{
    /** @var mixed */
    public $ether_types;
    /** @var integer */
    public int $gbp_tag;
    /** @var mixed */
    public $macs;
    /** @var string */
    public string $network;
    /** @var string */
    public string $port_usage;
    /** @var string */
    public string $radius_group;
    /** @var mixed */
    public $specs;
    /** @var mixed */
    public $subnets;
    /** @var mixed */
    public $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}