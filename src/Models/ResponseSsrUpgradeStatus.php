<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseSsrUpgradeStatus
 */
class ResponseSsrUpgradeStatus extends BaseModel
{
    /** @var string */
    public string $channel;
    /** @var string */
    public string $device_type;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $status;
    /** @var mixed */
    public $targets;
    /** @var object */
    public $versions;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}