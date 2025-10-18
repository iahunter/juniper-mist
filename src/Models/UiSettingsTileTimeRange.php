<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UiSettingsTileTimeRange
 */
class UiSettingsTileTimeRange extends BaseModel
{
    /** @var number */
    public float $end;
    /** @var string */
    public string $endDate;
    /** @var string */
    public string $interval;
    /** @var string */
    public string $name;
    /** @var string */
    public string $shortName;
    /** @var integer */
    public int $start;
    /** @var boolean */
    public bool $usePreset;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}