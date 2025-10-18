<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSettingMistNacIdp
 */
class OrgSettingMistNacIdp extends BaseModel
{
    /** @var mixed */
    public $exclude_realms;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $user_realms;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}