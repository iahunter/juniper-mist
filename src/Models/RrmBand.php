<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class RrmBand extends BaseModel
{
    public $bandwidth;
    public int $channel;
    public $curr_bandwidth;
    public int $curr_channel;
    public int $curr_power;
    public string $curr_usage;
    public int $power;
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