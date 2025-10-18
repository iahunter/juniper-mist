<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model DhcpClientOption
 */
class DhcpClientOption extends BaseModel
{
    /** @var string */
    public string $code;
    /** @var string */
    public string $data;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}