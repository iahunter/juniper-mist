<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WlanCiscoCwa
 */
class WlanCiscoCwa extends BaseModel
{
    /** @var mixed */
    public $allowed_hostnames;
    /** @var mixed */
    public $allowed_subnets;
    /** @var mixed */
    public $blocked_subnets;
    /** @var boolean */
    public bool $enabled;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}