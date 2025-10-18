<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsOrgSle
 */
class StatsOrgSle extends BaseModel
{
    /** @var string */
    public string $path;
    /** @var mixed */
    public $user_minutes;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}