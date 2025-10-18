<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSettingPasswordPolicy
 */
class OrgSettingPasswordPolicy extends BaseModel
{
    /** @var boolean */
    public bool $enabled;
    /** @var integer */
    public int $expiry_in_days;
    /** @var integer */
    public int $min_length;
    /** @var boolean */
    public bool $requires_special_char;
    /** @var boolean */
    public bool $requires_two_factor_auth;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}