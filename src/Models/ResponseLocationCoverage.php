<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponseLocationCoverage extends BaseModel
{
    public $beams_means;
    public int $end;
    public float $gridsize;
    public $result_def;
    public $results;
    public int $start;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}