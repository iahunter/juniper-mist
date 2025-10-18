<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ClientCertSerialNumbers
 */
class ClientCertSerialNumbers extends BaseModel
{
    /** @var mixed */
    public $serial_numbers;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}