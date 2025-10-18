<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RoutingPolicyTermAction
 */
class RoutingPolicyTermAction extends BaseModel
{
    /** @var boolean */
    public bool $accept;
    /** @var mixed */
    public $add_community;
    /** @var mixed */
    public $add_target_vrfs;
    /** @var mixed */
    public $community;
    /** @var mixed */
    public $exclude_as_path;
    /** @var mixed */
    public $exclude_community;
    /** @var mixed */
    public $export_communities;
    /** @var string */
    public string $local_preference;
    /** @var mixed */
    public $prepend_as_path;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}