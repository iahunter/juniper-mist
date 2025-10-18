<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model IdpProfileOverwrite
 */
class IdpProfileOverwrite extends BaseModel
{
    /** @var mixed */
    public $action;
    /** @var mixed */
    public $matching;
    /** @var string */
    public string $name;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}