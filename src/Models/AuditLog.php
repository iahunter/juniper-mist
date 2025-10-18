<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AuditLog
 */
class AuditLog extends BaseModel
{
    /** @var mixed */
    public $admin_id;
    /** @var string */
    public string $admin_name;
    /** @var mixed */
    public $after;
    /** @var mixed */
    public $before;
    /** @var boolean */
    public bool $for_site;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $message;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $timestamp;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}