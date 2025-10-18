<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Map
 */
class Map extends BaseModel
{
    /** @var mixed */
    public $created_time;
    /** @var object */
    public $flags;
    /** @var boolean */
    public bool $for_site;
    /** @var integer */
    public int $height;
    /** @var number */
    public float $height_m;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $latlng_br;
    /** @var mixed */
    public $latlng_tl;
    /** @var boolean */
    public bool $locked;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var integer */
    public int $occupancy_limit;
    /** @var mixed */
    public $org_id;
    /** @var integer */
    public int $orientation;
    /** @var integer */
    public int $origin_x;
    /** @var integer */
    public int $origin_y;
    /** @var number */
    public float $ppm;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $sitesurvey_path;
    /** @var string */
    public string $thumbnail_url;
    /** @var mixed */
    public $type;
    /** @var string */
    public string $url;
    /** @var mixed */
    public $view;
    /** @var mixed */
    public $wall_path;
    /** @var mixed */
    public $wayfinding;
    /** @var mixed */
    public $wayfinding_path;
    /** @var integer */
    public int $width;
    /** @var number */
    public float $width_m;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}