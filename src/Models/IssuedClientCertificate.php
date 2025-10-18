<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model IssuedClientCertificate
 */
class IssuedClientCertificate extends BaseModel
{
    /** @var string */
    public string $common_name;
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $device_id;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $serial_number;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}