<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class TroubleshootCallItem extends BaseModel
{
    public float $ap_num_clients;
    public float $ap_rtt;
    public $audio_in;
    public $audio_out;
    public float $client_cpu;
    public float $client_n_streams;
    public float $client_radio_band;
    public float $client_rssi;
    public float $client_rx_bytes;
    public float $client_rx_rates;
    public float $client_rx_retries;
    public float $client_tx_bytes;
    public float $client_tx_rates;
    public float $client_tx_retries;
    public float $client_vpn_distance;
    public float $client_wifi_version;
    public float $expected;
    public float $radio_ap_change;
    public float $radio_bandwidth;
    public float $radio_channel;
    public float $radio_rx_failed;
    public float $radio_tx_power;
    public float $radio_util;
    public float $radio_util_interference;
    public float $site_num_clients;
    public float $site_wan_avg_download_mbps;
    public float $site_wan_avg_upload_mbps;
    public float $site_wan_download_mbps;
    public float $site_wan_jitter;
    public float $site_wan_rtt;
    public float $site_wan_upload_mbps;
    public $timestamp;
    public $video_in;
    public $video_out;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}