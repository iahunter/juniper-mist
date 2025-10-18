<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Snmpv3ConfigTargetParam
 */
class Snmpv3ConfigTargetParam extends BaseModel
{
    /** @var mixed */
    public $message_processing_model;
    /** @var string */
    public string $name;
    /** @var string */
    public string $notify_filter;
    /** @var mixed */
    public $security_level;
    /** @var mixed */
    public $security_model;
    /** @var string */
    public string $security_name;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}