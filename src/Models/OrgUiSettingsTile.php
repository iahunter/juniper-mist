<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgUiSettingsTile
 */
class OrgUiSettingsTile extends BaseModel
{
    /** @var string */
    public string $description;
    /** @var mixed */
    public $id;
    /** @var boolean */
    public bool $isAutoTitle;
    /** @var string */
    public string $name;
    /** @var string */
    public string $nl_query;
    /** @var mixed */
    public $position;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}