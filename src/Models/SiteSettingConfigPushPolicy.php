<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteSettingConfigPushPolicy
 */
class SiteSettingConfigPushPolicy extends BaseModel
{
    /** @var boolean */
    public bool $no_push;
    /** @var mixed */
    public $push_window;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}