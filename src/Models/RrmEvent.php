<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class RrmEvent extends BaseModel
{
    public string $ap_id;
    public $band;
    public $bandwidth;
    public int $channel;
    public $event;
    public int $power;
    public $pre_bandwidth;
    public int $pre_channel;
    public float $pre_power;
    public string $pre_usage;
    public $timestamp;
    public string $usage;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}