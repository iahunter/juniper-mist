<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model LicenseUsageOrg
 */
class LicenseUsageOrg extends BaseModel
{
    /** @var boolean */
    public bool $for_site;
    /** @var mixed */
    public $fully_loaded;
    /** @var integer */
    public int $num_devices;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $summary;
    /** @var mixed */
    public $usages;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}