<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseAutoOrientation
 */
class ResponseAutoOrientation extends BaseModel
{
    /** @var mixed */
    public $devices;
    /** @var integer */
    public int $estimated_runtime;
    /** @var string */
    public string $reason;
    /** @var boolean */
    public bool $started;
    /** @var boolean */
    public bool $valid;
    /** @var boolean */
    public bool $wifi_interrupting;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}