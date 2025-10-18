<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model PrivilegeOrg
 */
class PrivilegeOrg extends BaseModel
{
    /** @var string */
    public string $org_id;
    /** @var mixed */
    public $role;
    /** @var mixed */
    public $scope;
    /** @var string */
    public string $site_id;
    /** @var string */
    public string $sitegroup_id;
    /** @var mixed */
    public $views;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}