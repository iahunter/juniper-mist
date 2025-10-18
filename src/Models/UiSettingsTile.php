<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UiSettingsTile
 */
class UiSettingsTile extends BaseModel
{
    /** @var string */
    public string $chartBand;
    /** @var string */
    public string $chartColor;
    /** @var string */
    public string $chartDirection;
    /** @var string */
    public string $chartRankBy;
    /** @var string */
    public string $chartType;
    /** @var integer */
    public int $colspan;
    /** @var integer */
    public int $column;
    /** @var boolean */
    public bool $hideEmptyRows;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $metric;
    /** @var string */
    public string $name;
    /** @var integer */
    public int $row;
    /** @var integer */
    public int $rowspan;
    /** @var string */
    public string $scopeId;
    /** @var string */
    public string $scopeType;
    /** @var mixed */
    public $sortedColumnIds;
    /** @var mixed */
    public $timeRange;
    /** @var string */
    public string $trendType;
    /** @var string */
    public string $vizType;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}