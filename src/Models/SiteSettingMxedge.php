<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteSettingMxedge
 */
class SiteSettingMxedge extends BaseModel
{
    /** @var mixed */
    public $mist_das;
    /** @var mixed */
    public $mist_nac;
    /** @var mixed */
    public $mist_nacedge;
    /** @var mixed */
    public $radsec;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}