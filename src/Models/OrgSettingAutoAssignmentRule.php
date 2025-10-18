<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSettingAutoAssignmentRule
 */
class OrgSettingAutoAssignmentRule extends BaseModel
{
    /** @var boolean */
    public bool $create_new_site_if_needed;
    /** @var string */
    public string $expression;
    /** @var string */
    public string $gatewaytemplate_id;
    /** @var string */
    public string $match_country;
    /** @var mixed */
    public $match_device_type;
    /** @var string */
    public string $match_model;
    /** @var string */
    public string $model;
    /** @var string */
    public string $prefix;
    /** @var mixed */
    public $src;
    /** @var string */
    public string $subnet;
    /** @var string */
    public string $suffix;
    /** @var string */
    public string $value;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}