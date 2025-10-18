<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WifiBeaconExtendedInfoItems
 */
class WifiBeaconExtendedInfoItems extends BaseModel
{
    /** @var integer */
    public int $frame_ctrl;
    /** @var string */
    public string $payload;
    /** @var integer */
    public int $seq_ctrl;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}