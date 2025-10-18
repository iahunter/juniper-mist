<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseAsyncLicense
 */
class ResponseAsyncLicense extends BaseModel
{
    /** @var mixed */
    public $completed;
    /** @var mixed */
    public $detail;
    /** @var integer */
    public int $failed;
    /** @var mixed */
    public $incompleted;
    /** @var integer */
    public int $processed;
    /** @var integer */
    public int $scheduled_at;
    /** @var mixed */
    public $status;
    /** @var integer */
    public int $succeed;
    /** @var mixed */
    public $timestamp;
    /** @var integer */
    public int $total;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}