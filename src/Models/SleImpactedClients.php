<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SleImpactedClients extends BaseModel
{
    public string $classifier;
    public $clients;
    public int $end;
    public string $failure;
    public int $limit;
    public string $metric;
    public int $page;
    public int $start;
    public int $total_count;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}