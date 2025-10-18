<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model TunnelProviderOptions
 */
class TunnelProviderOptions extends BaseModel
{
    /** @var mixed */
    public $jse;
    /** @var mixed */
    public $prisma;
    /** @var mixed */
    public $zscaler;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}