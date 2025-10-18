<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model PrivilegeMsp
 */
class PrivilegeMsp extends BaseModel
{
    /** @var string */
    public string $org_id;
    /** @var string */
    public string $org_name;
    /** @var string */
    public string $orggroup_id;
    /** @var mixed */
    public $role;
    /** @var mixed */
    public $scope;
    /** @var mixed */
    public $views;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}