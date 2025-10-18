<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Avprofile
 */
class Avprofile extends BaseModel
{
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $fallback_action;
    /** @var mixed */
    public $id;
    /** @var integer */
    public int $max_filesize;
    /** @var mixed */
    public $mime_whitelist;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $protocols;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $url_whitelist;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}