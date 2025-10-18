<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ReplaceDevice
 */
class ReplaceDevice extends BaseModel
{
    /** @var mixed */
    public $discard;
    /** @var string */
    public string $inventory_mac;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $site_id;
    /** @var mixed */
    public $tunterm_port_config;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}