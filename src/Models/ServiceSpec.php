<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ServiceSpec
 */
class ServiceSpec extends BaseModel
{
    /** @var string */
    public string $port_range;
    /** @var string */
    public string $protocol;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}