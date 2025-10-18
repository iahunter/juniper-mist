<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model InstallerSite
 */
class InstallerSite extends BaseModel
{
    /** @var string */
    public string $address;
    /** @var string */
    public string $country_code;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $latlng;
    /** @var string */
    public string $name;
    /** @var string */
    public string $rftemplate_name;
    /** @var mixed */
    public $sitegroup_names;
    /** @var string */
    public string $timezone;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}