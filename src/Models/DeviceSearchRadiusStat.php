<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model DeviceSearchRadiusStat
 */
class DeviceSearchRadiusStat extends BaseModel
{
    /** @var integer */
    public int $auth_accepts;
    /** @var integer */
    public int $auth_rejects;
    /** @var mixed */
    public $auth_server_status;
    /** @var integer */
    public int $auth_timeouts;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}