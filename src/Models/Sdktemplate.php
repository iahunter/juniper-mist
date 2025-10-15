<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Sdktemplate extends BaseModel
{
    public string $bg_image;
    public string $btn_flr_bgcolor;
    public $created_time;
    public bool $default;
    public bool $for_site;
    public string $header_txt;
    public $id;
    public $modified_time;
    public string $name;
    public $org_id;
    public string $search_txtcolor;
    public $site_id;
    public string $welcome_msg;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}