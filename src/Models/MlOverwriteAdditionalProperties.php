<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MlOverwriteAdditionalProperties
 */
class MlOverwriteAdditionalProperties extends BaseModel
{
    /** @var integer */
    public int $int;
    /** @var integer */
    public int $ple;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}