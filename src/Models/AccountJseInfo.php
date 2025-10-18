<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AccountJseInfo
 */
class AccountJseInfo extends BaseModel
{
    /** @var string */
    public string $cloud_name;
    /** @var string */
    public string $username;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}