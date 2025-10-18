<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SleImpactedClientsClient
 */
class SleImpactedClientsClient extends BaseModel
{
    /** @var integer */
    public int $degraded;
    /** @var integer */
    public int $duration;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $switches;
    /** @var integer */
    public int $total;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}