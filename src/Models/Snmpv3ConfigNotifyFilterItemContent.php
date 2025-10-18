<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Snmpv3ConfigNotifyFilterItemContent
 */
class Snmpv3ConfigNotifyFilterItemContent extends BaseModel
{
    /** @var boolean */
    public bool $include;
    /** @var string */
    public string $oid;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}