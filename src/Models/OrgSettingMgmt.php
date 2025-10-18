<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSettingMgmt
 */
class OrgSettingMgmt extends BaseModel
{
    /** @var mixed */
    public $mxtunnel_ids;
    /** @var boolean */
    public bool $use_mxtunnel;
    /** @var boolean */
    public bool $use_wxtunnel;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}