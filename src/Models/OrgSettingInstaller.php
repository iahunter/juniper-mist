<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSettingInstaller
 */
class OrgSettingInstaller extends BaseModel
{
    /** @var boolean */
    public bool $allow_all_devices;
    /** @var boolean */
    public bool $allow_all_sites;
    /** @var mixed */
    public $extra_site_ids;
    /** @var integer */
    public int $grace_period;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}