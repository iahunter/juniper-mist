<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Template extends BaseModel
{
    public $applies;
    public $created_time;
    public $deviceprofile_ids;
    public $exceptions;
    public bool $filter_by_deviceprofile;
    public $id;
    public $modified_time;
    public string $name;
    public $org_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}