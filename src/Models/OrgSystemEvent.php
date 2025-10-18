<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSystemEvent
 */
class OrgSystemEvent extends BaseModel
{
    /** @var string */
    public string $change_cat;
    /** @var string */
    public string $metadata;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $scope;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}