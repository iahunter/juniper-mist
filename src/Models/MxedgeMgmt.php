<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MxedgeMgmt
 */
class MxedgeMgmt extends BaseModel
{
    /** @var boolean */
    public bool $config_auto_revert;
    /** @var boolean */
    public bool $fips_enabled;
    /** @var string */
    public string $mist_password;
    /** @var mixed */
    public $oob_ip_type;
    /** @var mixed */
    public $oob_ip_type6;
    /** @var string */
    public string $root_password;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}