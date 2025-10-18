<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SnmpUsm
 */
class SnmpUsm extends BaseModel
{
    /** @var mixed */
    public $engine_type;
    /** @var string */
    public string $remote_engine_id;
    /** @var mixed */
    public $users;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}