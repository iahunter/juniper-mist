<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSettingCloudshark
 */
class OrgSettingCloudshark extends BaseModel
{
    /** @var string */
    public string $apitoken;
    /** @var string */
    public string $url;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}