<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AccountCradlepointConfig
 */
class AccountCradlepointConfig extends BaseModel
{
    /** @var string */
    public string $cp_api_id;
    /** @var string */
    public string $cp_api_key;
    /** @var string */
    public string $ecm_api_id;
    /** @var string */
    public string $ecm_api_key;
    /** @var boolean */
    public bool $enable_lldp;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}