<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseSynthetictest
 */
class ResponseSynthetictest extends BaseModel
{
    /** @var mixed */
    public $id;
    /** @var string */
    public string $message;
    /** @var string */
    public string $status;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}