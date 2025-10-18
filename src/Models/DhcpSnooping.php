<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model DhcpSnooping
 */
class DhcpSnooping extends BaseModel
{
    /** @var boolean */
    public bool $all_networks;
    /** @var boolean */
    public bool $enable_arp_spoof_check;
    /** @var boolean */
    public bool $enable_ip_source_guard;
    /** @var boolean */
    public bool $enabled;
    /** @var mixed */
    public $networks;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}