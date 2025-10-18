<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SuppressedAlarmApplies
 */
class SuppressedAlarmApplies extends BaseModel
{
    /** @var string */
    public string $org_id;
    /** @var mixed */
    public $site_ids;
    /** @var mixed */
    public $sitegroup_ids;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}