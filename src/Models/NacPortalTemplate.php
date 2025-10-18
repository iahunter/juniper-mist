<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model NacPortalTemplate
 */
class NacPortalTemplate extends BaseModel
{
    /** @var mixed */
    public $alignment;
    /** @var string */
    public string $color;
    /** @var string */
    public string $logo;
    /** @var boolean */
    public bool $poweredBy;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}