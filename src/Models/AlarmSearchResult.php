<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class AlarmSearchResult extends BaseModel
{
    public string $component;
    public int $end;
    public int $limit;
    public string $next;
    public int $page;
    public $results;
    public int $start;
    public int $total;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}