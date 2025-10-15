<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Map extends BaseModel
{
    public $created_time;
    public array $flags;
    public bool $for_site;
    public int $height;
    public float $height_m;
    public $id;
    public $latlng_br;
    public $latlng_tl;
    public bool $locked;
    public $modified_time;
    public string $name;
    public int $occupancy_limit;
    public $org_id;
    public int $orientation;
    public int $origin_x;
    public int $origin_y;
    public float $ppm;
    public $site_id;
    public $sitesurvey_path;
    public string $thumbnail_url;
    public $type;
    public string $url;
    public $view;
    public $wall_path;
    public $wayfinding;
    public $wayfinding_path;
    public int $width;
    public float $width_m;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}