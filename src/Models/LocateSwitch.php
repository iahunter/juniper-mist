<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model LocateSwitch
 */
class LocateSwitch extends BaseModel
{
    /** @var integer */
    public int $duration;
    /** @var string */
    public string $mac;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}