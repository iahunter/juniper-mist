<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponseAsyncLicense extends BaseModel
{
    public $completed;
    public $detail;
    public int $failed;
    public $incompleted;
    public int $processed;
    public int $scheduled_at;
    public $status;
    public int $succeed;
    public $timestamp;
    public int $total;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}