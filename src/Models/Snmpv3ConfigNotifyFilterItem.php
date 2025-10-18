<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Snmpv3ConfigNotifyFilterItem
 */
class Snmpv3ConfigNotifyFilterItem extends BaseModel
{
    /** @var mixed */
    public $contents;
    /** @var string */
    public string $profile_name;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}