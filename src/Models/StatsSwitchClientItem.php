<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsSwitchClientItem
 */
class StatsSwitchClientItem extends BaseModel
{
    /** @var string */
    public string $device_mac;
    /** @var string */
    public string $hostname;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $port_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}