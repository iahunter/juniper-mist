<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Template
 */
class Template extends BaseModel
{
    /** @var mixed */
    public $applies;
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $deviceprofile_ids;
    /** @var mixed */
    public $exceptions;
    /** @var boolean */
    public bool $filter_by_deviceprofile;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}