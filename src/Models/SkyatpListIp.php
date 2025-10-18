<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SkyatpListIp
 */
class SkyatpListIp extends BaseModel
{
    /** @var string */
    public string $comment;
    /** @var string */
    public string $value;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}