<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ServicePacket
 */
class ServicePacket extends BaseModel
{
    /** @var string */
    public string $service_data;
    /** @var string */
    public string $service_uuid;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}