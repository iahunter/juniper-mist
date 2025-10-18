<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UiSettings
 */
class UiSettings extends BaseModel
{
    /** @var mixed */
    public $created_time;
    /** @var string */
    public string $defaultScopeId;
    /** @var string */
    public string $defaultScopeType;
    /** @var mixed */
    public $defaultTimeRange;
    /** @var string */
    public string $description;
    /** @var boolean */
    public bool $for_site;
    /** @var mixed */
    public $id;
    /** @var boolean */
    public bool $isCustomDataboard;
    /** @var boolean */
    public bool $isScopeLinked;
    /** @var boolean */
    public bool $isTimeRangeLinked;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $purpose;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $tiles;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}