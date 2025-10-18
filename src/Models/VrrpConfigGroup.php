<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model VrrpConfigGroup
 */
class VrrpConfigGroup extends BaseModel
{
    /** @var boolean */
    public bool $preempt;
    /** @var integer */
    public int $priority;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}