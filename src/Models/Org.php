<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Org
 */
class Org extends BaseModel
{
    /** @var string */
    public string $alarmtemplate_id;
    /** @var boolean */
    public bool $allow_mist;
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $modified_time;
    /** @var mixed */
    public $msp_id;
    /** @var string */
    public string $msp_logo_url;
    /** @var string */
    public string $msp_name;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $orggroup_ids;
    /** @var integer */
    public int $session_expiry;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}