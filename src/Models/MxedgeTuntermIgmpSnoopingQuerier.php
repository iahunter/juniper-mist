<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class MxedgeTuntermIgmpSnoopingQuerier extends BaseModel
{
    public int $max_response_time;
    public int $mtu;
    public int $query_interval;
    public int $robustness;
    public int $version;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}