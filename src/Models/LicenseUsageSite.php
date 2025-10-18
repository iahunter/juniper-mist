<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model LicenseUsageSite
 */
class LicenseUsageSite extends BaseModel
{
    /** @var mixed */
    public $org_entitled;
    /** @var boolean */
    public bool $svna_enabled;
    /** @var boolean */
    public bool $trial_enabled;
    /** @var mixed */
    public $usages;
    /** @var boolean */
    public bool $vna_eligible;
    /** @var boolean */
    public bool $vna_ui;
    /** @var boolean */
    public bool $wvna_eligible;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}