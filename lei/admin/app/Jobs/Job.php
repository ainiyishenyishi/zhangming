<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;

abstract class Job
{
    /*
    |--------------------------------------------------------------------------
    | Queueable Jobs
    |--------------------------------------------------------------------------
    |
    | This job base querysClass.php provides a central location to place any logic that
    | is shared across all of your jobs. The trait included with the querysClass.php
    | provides access to the "onQueue" and "delay" queue helper methods.
    |
    */

    use Queueable;
}
