<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model IdpProfileMatching
 */
class IdpProfileMatching extends BaseModel
{
    /** @var mixed */
    public $attack_name;
    /** @var mixed */
    public $dst_subnet;
    /** @var mixed */
    public $severity;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}