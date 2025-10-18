<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseCountMarvisActions
 */
class ResponseCountMarvisActions extends BaseModel
{
    /** @var string */
    public string $distinct;
    /** @var integer */
    public int $limit;
    /** @var mixed */
    public $results;
    /** @var integer */
    public int $total;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}