<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UtilsClearSession
 */
class UtilsClearSession extends BaseModel
{
    /** @var mixed */
    public $node;
    /** @var string */
    public string $service_name;
    /** @var mixed */
    public $session_ids;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}