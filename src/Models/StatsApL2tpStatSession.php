<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsApL2tpStatSession
 */
class StatsApL2tpStatSession extends BaseModel
{
    /** @var integer */
    public int $local_sid;
    /** @var string */
    public string $remote_id;
    /** @var integer */
    public int $remote_sid;
    /** @var mixed */
    public $state;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}