<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SnmpConfigClientList
 */
class SnmpConfigClientList extends BaseModel
{
    /** @var string */
    public string $client_list_name;
    /** @var mixed */
    public $clients;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}