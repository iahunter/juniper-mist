<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RrmEvent
 */
class RrmEvent extends BaseModel
{
    /** @var string */
    public string $ap_id;
    /** @var mixed */
    public $band;
    /** @var mixed */
    public $bandwidth;
    /** @var integer */
    public int $channel;
    /** @var mixed */
    public $event;
    /** @var integer */
    public int $power;
    /** @var mixed */
    public $pre_bandwidth;
    /** @var integer */
    public int $pre_channel;
    /** @var number */
    public float $pre_power;
    /** @var string */
    public string $pre_usage;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $usage;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}