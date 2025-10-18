<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SkyatpList
 */
class SkyatpList extends BaseModel
{
    /** @var mixed */
    public $domains;
    /** @var mixed */
    public $ip;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}