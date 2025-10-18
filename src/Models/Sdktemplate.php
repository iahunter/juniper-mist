<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Sdktemplate
 */
class Sdktemplate extends BaseModel
{
    /** @var string */
    public string $bg_image;
    /** @var string */
    public string $btn_flr_bgcolor;
    /** @var mixed */
    public $created_time;
    /** @var boolean */
    public bool $default;
    /** @var boolean */
    public bool $for_site;
    /** @var string */
    public string $header_txt;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $search_txtcolor;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $welcome_msg;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}