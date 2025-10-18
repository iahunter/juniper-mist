<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SnmpConfigView
 */
class SnmpConfigView extends BaseModel
{
    /** @var boolean */
    public bool $include;
    /** @var string */
    public string $oid;
    /** @var string */
    public string $view_name;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}