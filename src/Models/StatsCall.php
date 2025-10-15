<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsCall extends BaseModel
{
    public string $app;
    public int $audio_quality;
    public int $end_time;
    public string $mac;
    public string $meeting_id;
    public $org_id;
    public int $rating;
    public int $screen_share_quality;
    public $site_id;
    public int $start_time;
    public int $video_quality;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}