<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteSettingJuniperSrx
 */
class SiteSettingJuniperSrx extends BaseModel
{
    /** @var mixed */
    public $gateways;
    /** @var boolean */
    public bool $send_mist_nac_user_info;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}