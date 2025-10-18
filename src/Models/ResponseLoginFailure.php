<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseLoginFailure
 */
class ResponseLoginFailure extends BaseModel
{
    /** @var string */
    public string $detail;
    /** @var string */
    public string $forward_url;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}