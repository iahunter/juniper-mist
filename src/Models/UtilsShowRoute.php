<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class UtilsShowRoute extends BaseModel
{
    public int $duration;
    public int $interval;
    public string $neighbor;
    public $node;
    public string $prefix;
    public $protocol;
    public string $route;
    public string $vrf;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}