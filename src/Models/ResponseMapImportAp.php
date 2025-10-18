<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseMapImportAp
 */
class ResponseMapImportAp extends BaseModel
{
    /** @var mixed */
    public $action;
    /** @var string */
    public string $floorplan_id;
    /** @var number */
    public float $height;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $map_id;
    /** @var integer */
    public int $orientation;
    /** @var string */
    public string $reason;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}