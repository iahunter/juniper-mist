<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ClaimActivation
 */
class ClaimActivation extends BaseModel
{
    /** @var boolean */
    public bool $async;
    /** @var string */
    public string $code;
    /** @var mixed */
    public $device_type;
    /** @var mixed */
    public $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}