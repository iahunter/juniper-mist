<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SnmpVacmSecurityToGroupContentItem
 */
class SnmpVacmSecurityToGroupContentItem extends BaseModel
{
    /** @var string */
    public string $group;
    /** @var string */
    public string $security_name;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}