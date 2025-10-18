<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MacTableStats
 */
class MacTableStats extends BaseModel
{
    /** @var integer */
    public int $mac_table_count;
    /** @var integer */
    public int $max_mac_entries_supported;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}