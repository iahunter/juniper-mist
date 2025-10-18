<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AccountZdxConfig
 */
class AccountZdxConfig extends BaseModel
{
    /** @var string */
    public string $cloud_name;
    /** @var string */
    public string $key_id;
    /** @var string */
    public string $key_secret;
    /** @var string */
    public string $zdx_org_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}