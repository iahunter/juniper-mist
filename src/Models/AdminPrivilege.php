<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AdminPrivilege
 */
class AdminPrivilege extends BaseModel
{
    /** @var mixed */
    public $msp_id;
    /** @var string */
    public string $msp_logo_url;
    /** @var string */
    public string $msp_name;
    /** @var string */
    public string $msp_url;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $org_name;
    /** @var mixed */
    public $orggroup_ids;
    /** @var mixed */
    public $role;
    /** @var mixed */
    public $scope;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $sitegroup_ids;
    /** @var mixed */
    public $views;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}