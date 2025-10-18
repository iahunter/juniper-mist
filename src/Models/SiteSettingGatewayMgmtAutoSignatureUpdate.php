<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteSettingGatewayMgmtAutoSignatureUpdate
 */
class SiteSettingGatewayMgmtAutoSignatureUpdate extends BaseModel
{
    /** @var mixed */
    public $day_of_week;
    /** @var boolean */
    public bool $enable;
    /** @var string */
    public string $time_of_day;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}