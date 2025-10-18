<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseInventory
 */
class ResponseInventory extends BaseModel
{
    /** @var mixed */
    public $added;
    /** @var mixed */
    public $duplicated;
    /** @var mixed */
    public $error;
    /** @var mixed */
    public $inventory_added;
    /** @var mixed */
    public $inventory_duplicated;
    /** @var mixed */
    public $reason;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}