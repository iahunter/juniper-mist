<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseOrgSuppressAlarmItem
 */
class ResponseOrgSuppressAlarmItem extends BaseModel
{
    /** @var integer */
    public int $duration;
    /** @var integer */
    public int $expire_time;
    /** @var integer */
    public int $scheduled_time;
    /** @var mixed */
    public $scope;
    /** @var mixed */
    public $site_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}