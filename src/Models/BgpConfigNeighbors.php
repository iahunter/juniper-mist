<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class BgpConfigNeighbors extends BaseModel
{
    public bool $disabled;
    public string $export_policy;
    public int $hold_time;
    public string $import_policy;
    public int $multihop_ttl;
    public $neighbor_as;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}