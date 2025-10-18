<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SsoOpenroaming
 */
class SsoOpenroaming extends BaseModel
{
    /** @var mixed */
    public $ssids;
    /** @var string */
    public string $wba_cert;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}