<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MapWayfinding
 */
class MapWayfinding extends BaseModel
{
    /** @var mixed */
    public $micello;
    /** @var boolean */
    public bool $snap_to_path;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}