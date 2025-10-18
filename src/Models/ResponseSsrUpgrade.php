<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseSsrUpgrade
 */
class ResponseSsrUpgrade extends BaseModel
{
    /** @var string */
    public string $channel;
    /** @var mixed */
    public $counts;
    /** @var string */
    public string $device_type;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $status;
    /** @var string */
    public string $strategy;
    /** @var object */
    public $versions;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}