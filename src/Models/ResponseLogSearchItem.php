<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseLogSearchItem
 */
class ResponseLogSearchItem extends BaseModel
{
    /** @var string */
    public string $admin_id;
    /** @var string */
    public string $admin_name;
    /** @var object */
    public $after;
    /** @var object */
    public $before;
    /** @var boolean */
    public bool $for_site;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $message;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $site_id;
    /** @var string */
    public string $src_ip;
    /** @var mixed */
    public $timestamp;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}