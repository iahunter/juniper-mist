<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MxedgeDas
 */
class MxedgeDas extends BaseModel
{
    /** @var mixed */
    public $coa_servers;
    /** @var boolean */
    public bool $enabled;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}