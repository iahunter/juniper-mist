<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstDeviceApBand24
 */
class ConstDeviceApBand24 extends BaseModel
{
    /** @var string */
    public string $band5_channels_op;
    /** @var integer */
    public int $max_clients;
    /** @var integer */
    public int $max_power;
    /** @var integer */
    public int $min_power;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}