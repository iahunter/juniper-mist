<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSettingScep
 */
class OrgSettingScep extends BaseModel
{
    /** @var mixed */
    public $cert_providers;
    /** @var boolean */
    public bool $enable;
    /** @var boolean */
    public bool $suspended;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}