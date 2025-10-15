<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WxlanRule extends BaseModel
{
    public $action;
    public $apply_tags;
    public $blocked_apps;
    public $created_time;
    public $dst_allow_wxtags;
    public $dst_deny_wxtags;
    public $dst_wxtags;
    public bool $enabled;
    public bool $for_site;
    public $id;
    public $modified_time;
    public int $order;
    public $org_id;
    public $site_id;
    public $src_wxtags;
    public string $template_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}