<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstApEslVersion
 */
class ConstApEslVersion extends BaseModel
{
    /** @var string */
    public string $esl_version;
    /** @var string */
    public string $model;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}