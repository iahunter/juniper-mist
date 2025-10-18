<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WxlanRule
 */
class WxlanRule extends BaseModel
{
    /** @var mixed */
    public $action;
    /** @var mixed */
    public $apply_tags;
    /** @var mixed */
    public $blocked_apps;
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $dst_allow_wxtags;
    /** @var mixed */
    public $dst_deny_wxtags;
    /** @var mixed */
    public $dst_wxtags;
    /** @var boolean */
    public bool $enabled;
    /** @var boolean */
    public bool $for_site;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $modified_time;
    /** @var integer */
    public int $order;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $src_wxtags;
    /** @var string */
    public string $template_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}