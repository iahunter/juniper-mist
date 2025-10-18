<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MapWayfindingMicello
 */
class MapWayfindingMicello extends BaseModel
{
    /** @var string */
    public string $account_key;
    /** @var integer */
    public int $default_level_id;
    /** @var string */
    public string $map_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}