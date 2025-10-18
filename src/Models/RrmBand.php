<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RrmBand
 */
class RrmBand extends BaseModel
{
    /** @var mixed */
    public $bandwidth;
    /** @var integer */
    public int $channel;
    /** @var mixed */
    public $curr_bandwidth;
    /** @var integer */
    public int $curr_channel;
    /** @var integer */
    public int $curr_power;
    /** @var string */
    public string $curr_usage;
    /** @var integer */
    public int $power;
    /** @var string */
    public string $usage;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}