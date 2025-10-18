<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Rrm
 */
class Rrm extends BaseModel
{
    /** @var object */
    public $band_24;
    /** @var mixed */
    public $band_24_metric;
    /** @var object */
    public $band_5;
    /** @var mixed */
    public $band_5_metric;
    /** @var object */
    public $band_6;
    /** @var mixed */
    public $band_6_metric;
    /** @var mixed */
    public $rftemplate;
    /** @var string */
    public string $rftemplate_id;
    /** @var string */
    public string $rftemplate_name;
    /** @var mixed */
    public $status;
    /** @var mixed */
    public $timestamp;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}