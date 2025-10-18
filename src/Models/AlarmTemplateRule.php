<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AlarmTemplateRule
 */
class AlarmTemplateRule extends BaseModel
{
    /** @var mixed */
    public $delivery;
    /** @var boolean */
    public bool $enabled;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}