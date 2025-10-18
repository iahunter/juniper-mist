<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseAutoplacementDevice
 */
class ResponseAutoplacementDevice extends BaseModel
{
    /** @var string */
    public string $reason;
    /** @var boolean */
    public bool $valid;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}