<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class OrgSettingPasswordPolicy extends BaseModel
{
    public bool $enabled;
    public int $expiry_in_days;
    public int $min_length;
    public bool $requires_special_char;
    public bool $requires_two_factor_auth;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}