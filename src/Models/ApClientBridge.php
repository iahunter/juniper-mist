<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ApClientBridge
 */
class ApClientBridge extends BaseModel
{
    /** @var mixed */
    public $auth;
    /** @var boolean */
    public bool $enabled;
    /** @var string */
    public string $ssid;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}