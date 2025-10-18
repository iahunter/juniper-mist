<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSettingJcloudRa
 */
class OrgSettingJcloudRa extends BaseModel
{
    /** @var string */
    public string $org_apitoken;
    /** @var string */
    public string $org_apitoken_name;
    /** @var string */
    public string $org_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}