<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class UiSettingsTileTimeRange extends BaseModel
{
    public float $end;
    public string $endDate;
    public string $interval;
    public string $name;
    public string $shortName;
    public int $start;
    public bool $usePreset;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}