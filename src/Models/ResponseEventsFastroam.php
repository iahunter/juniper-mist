<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseEventsFastroam
 */
class ResponseEventsFastroam extends BaseModel
{
    /** @var integer */
    public int $end;
    /** @var integer */
    public int $limit;
    /** @var string */
    public string $next;
    /** @var mixed */
    public $results;
    /** @var integer */
    public int $start;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}