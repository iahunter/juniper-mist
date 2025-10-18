<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ApiUsage
 */
class ApiUsage extends BaseModel
{
    /** @var integer */
    public int $request_limit;
    /** @var integer */
    public int $requests;
    /** @var number */
    public float $seconds;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}