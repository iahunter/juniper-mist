<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseOrgInventoryChange
 */
class ResponseOrgInventoryChange extends BaseModel
{
    /** @var mixed */
    public $error;
    /** @var mixed */
    public $op;
    /** @var mixed */
    public $reason;
    /** @var mixed */
    public $success;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}