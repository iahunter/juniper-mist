<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model FwupdateStat
 */
class FwupdateStat extends BaseModel
{
    /** @var integer */
    public int $progress;
    /** @var mixed */
    public $status;
    /** @var integer */
    public int $status_id;
    /** @var mixed */
    public $timestamp;
    /** @var boolean */
    public bool $will_retry;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}