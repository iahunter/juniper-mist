<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Avprofile extends BaseModel
{
    public $created_time;
    public $fallback_action;
    public $id;
    public int $max_filesize;
    public $mime_whitelist;
    public $modified_time;
    public string $name;
    public $org_id;
    public $protocols;
    public $site_id;
    public $url_whitelist;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}