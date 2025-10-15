<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class LicenseUsageSite extends BaseModel
{
    public $org_entitled;
    public bool $svna_enabled;
    public bool $trial_enabled;
    public $usages;
    public bool $vna_eligible;
    public bool $vna_ui;
    public bool $wvna_eligible;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}