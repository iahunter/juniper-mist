<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UtilsShowSession
 */
class UtilsShowSession extends BaseModel
{
    /** @var mixed */
    public $node;
    /** @var string */
    public string $service_name;
    /** @var string */
    public string $session_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}