<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class UpgradeDevicesTargets extends BaseModel
{
    public $download_requested;
    public $downloaded;
    public $downloading;
    public $failed;
    public $reboot_in_progress;
    public $rebooted;
    public $scheduled;
    public $skipped;
    public int $total;
    public $upgraded;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}