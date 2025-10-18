<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model VirtualChassisUpdate
 */
class VirtualChassisUpdate extends BaseModel
{
    /** @var integer */
    public int $member;
    /** @var mixed */
    public $members;
    /** @var integer */
    public int $new-member;
    /** @var mixed */
    public $op;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}