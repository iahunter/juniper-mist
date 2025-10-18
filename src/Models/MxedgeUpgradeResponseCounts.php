<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MxedgeUpgradeResponseCounts
 */
class MxedgeUpgradeResponseCounts extends BaseModel
{
    /** @var integer */
    public int $failed;
    /** @var integer */
    public int $queued;
    /** @var integer */
    public int $success;
    /** @var integer */
    public int $upgrading;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}