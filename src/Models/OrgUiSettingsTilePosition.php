<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgUiSettingsTilePosition
 */
class OrgUiSettingsTilePosition extends BaseModel
{
    /** @var integer */
    public int $col;
    /** @var integer */
    public int $colSpan;
    /** @var integer */
    public int $row;
    /** @var integer */
    public int $rowSpan;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}