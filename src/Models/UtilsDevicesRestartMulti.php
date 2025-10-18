<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UtilsDevicesRestartMulti
 */
class UtilsDevicesRestartMulti extends BaseModel
{
    /** @var mixed */
    public $device_ids;
    /** @var string */
    public string $node;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}