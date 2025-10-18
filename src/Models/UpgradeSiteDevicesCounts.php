<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UpgradeSiteDevicesCounts
 */
class UpgradeSiteDevicesCounts extends BaseModel
{
    /** @var integer */
    public int $download_requested;
    /** @var integer */
    public int $downloaded;
    /** @var integer */
    public int $failed;
    /** @var integer */
    public int $reboot_in_progress;
    /** @var integer */
    public int $rebooted;
    /** @var integer */
    public int $scheduled;
    /** @var integer */
    public int $skipped;
    /** @var integer */
    public int $total;
    /** @var integer */
    public int $upgraded;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}