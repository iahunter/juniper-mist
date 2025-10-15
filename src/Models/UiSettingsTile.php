<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class UiSettingsTile extends BaseModel
{
    public string $chartBand;
    public string $chartColor;
    public string $chartDirection;
    public string $chartRankBy;
    public string $chartType;
    public int $colspan;
    public int $column;
    public bool $hideEmptyRows;
    public $id;
    public $metric;
    public string $name;
    public int $row;
    public int $rowspan;
    public string $scopeId;
    public string $scopeType;
    public $sortedColumnIds;
    public $timeRange;
    public string $trendType;
    public string $vizType;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}