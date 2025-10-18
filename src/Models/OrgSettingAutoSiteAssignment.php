<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSettingAutoSiteAssignment
 */
class OrgSettingAutoSiteAssignment extends BaseModel
{
    /** @var boolean */
    public bool $enable;
    /** @var mixed */
    public $rules;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}