<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MapSiteReplaceFileJsonTransform
 */
class MapSiteReplaceFileJsonTransform extends BaseModel
{
    /** @var number */
    public float $rotation;
    /** @var number */
    public float $scale;
    /** @var number */
    public float $x;
    /** @var number */
    public float $y;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}