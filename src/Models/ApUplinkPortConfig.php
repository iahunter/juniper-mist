<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ApUplinkPortConfig
 */
class ApUplinkPortConfig extends BaseModel
{
    /** @var boolean */
    public bool $dot1x;
    /** @var boolean */
    public bool $keep_wlans_up_if_down;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}