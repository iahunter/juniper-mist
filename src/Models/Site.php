<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Site
 */
class Site extends BaseModel
{
    /** @var string */
    public string $address;
    /** @var string */
    public string $alarmtemplate_id;
    /** @var string */
    public string $aptemplate_id;
    /** @var string */
    public string $country_code;
    /** @var mixed */
    public $created_time;
    /** @var string */
    public string $gatewaytemplate_id;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $latlng;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var string */
    public string $networktemplate_id;
    /** @var string */
    public string $notes;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $rftemplate_id;
    /** @var string */
    public string $secpolicy_id;
    /** @var mixed */
    public $sitegroup_ids;
    /** @var string */
    public string $sitetemplate_id;
    /** @var string */
    public string $timezone;
    /** @var integer */
    public int $tzoffset;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}