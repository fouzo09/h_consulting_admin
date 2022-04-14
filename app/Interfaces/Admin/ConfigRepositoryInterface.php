<?php
namespace App\Interfaces\Admin;

use App\Http\Requests\ConfigRequest;
use App\Models\Config;

interface ConfigRepositoryInterface {
    public function getConfig();
    public function postConfig(Config $_config);
}