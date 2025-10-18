<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ProtectReCustom
 */
class ProtectReCustom extends BaseModel
{
    /** @var string */
    public string $port_range;
    /** @var mixed */
    public $protocol;
    /** @var mixed */
    public $subnets;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}