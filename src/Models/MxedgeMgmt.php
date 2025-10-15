<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class MxedgeMgmt extends BaseModel
{
    public bool $config_auto_revert;
    public bool $fips_enabled;
    public string $mist_password;
    public $oob_ip_type;
    public $oob_ip_type6;
    public string $root_password;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}