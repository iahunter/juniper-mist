<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SimpleAlert
 */
class SimpleAlert extends BaseModel
{
    /** @var mixed */
    public $arp_failure;
    /** @var mixed */
    public $dhcp_failure;
    /** @var mixed */
    public $dns_failure;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}