<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseConfigHistorySearchItemWlan
 */
class ResponseConfigHistorySearchItemWlan extends BaseModel
{
    /** @var string */
    public string $auth;
    /** @var mixed */
    public $bands;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $ssid;
    /** @var mixed */
    public $vlan_ids;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}