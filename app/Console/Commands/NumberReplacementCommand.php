<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class NumberReplacementCommand extends Command
{
    protected $signature = 'number:replace';
    protected $description = 'Replace numbers and generate output.json file';

    public function handle()
    {
        $result = [];

        for ($num = 1; $num <= 100; $num++) {
            if ($num % 3 === 0 && $num % 5 === 0) {
                $result[] = "BIGBANG";
            } elseif ($num % 3 === 0) {
                $result[] = "BIG";
            } elseif ($num % 5 === 0) {
                $result[] = "BANG";
            } else {
                $result[] = strval($num);
            }
        }

        $outputPath = storage_path('app/output.json');
        File::put($outputPath, json_encode($result));

        $this->info('Output written to ' . $outputPath);
    }
}
