<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseMapImportSummary
 */
class ResponseMapImportSummary extends BaseModel
{
    /** @var integer */
    public int $num_ap_assigned;
    /** @var integer */
    public int $num_inv_assigned;
    /** @var integer */
    public int $num_map_assigned;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}