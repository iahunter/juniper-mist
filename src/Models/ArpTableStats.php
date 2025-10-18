<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ArpTableStats
 */
class ArpTableStats extends BaseModel
{
    /** @var integer */
    public int $arp_table_count;
    /** @var integer */
    public int $max_entries_supported;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}