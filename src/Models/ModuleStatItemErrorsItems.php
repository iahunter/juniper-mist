<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ModuleStatItemErrorsItems
 */
class ModuleStatItemErrorsItems extends BaseModel
{
    /** @var string */
    public string $feature;
    /** @var string */
    public string $minimum_version;
    /** @var string */
    public string $reason;
    /** @var integer */
    public int $since;
    /** @var string */
    public string $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}