<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SleImpactedUsers extends BaseModel
{
    public string $classifier;
    public $clients;
    public float $end;
    public string $failure;
    public float $limit;
    public string $metric;
    public float $page;
    public float $start;
    public float $total_count;
    public $users;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}