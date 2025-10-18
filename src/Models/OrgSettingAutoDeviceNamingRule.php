<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSettingAutoDeviceNamingRule
 */
class OrgSettingAutoDeviceNamingRule extends BaseModel
{
    /** @var string */
    public string $expression;
    /** @var mixed */
    public $match_device;
    /** @var string */
    public string $prefix;
    /** @var mixed */
    public $src;
    /** @var string */
    public string $suffix;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}