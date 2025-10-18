<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Snmpv3Config
 */
class Snmpv3Config extends BaseModel
{
    /** @var mixed */
    public $notify;
    /** @var mixed */
    public $notify_filter;
    /** @var mixed */
    public $target_address;
    /** @var mixed */
    public $target_parameters;
    /** @var mixed */
    public $usm;
    /** @var mixed */
    public $vacm;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}