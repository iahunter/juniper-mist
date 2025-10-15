<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class UpgradeSiteDevicesCounts extends BaseModel
{
    public int $download_requested;
    public int $downloaded;
    public int $failed;
    public int $reboot_in_progress;
    public int $rebooted;
    public int $scheduled;
    public int $skipped;
    public int $total;
    public int $upgraded;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}