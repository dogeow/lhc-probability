<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Spec extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calc:spec';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $lotteries = \App\Models\Lottery::orderBy('date', 'asc')->get()->toArray();

        $stats = [];

        foreach ($lotteries as $i => $lottery) {
            if (! isset($lotteries[$i + 1])) {
                break;
            }

            $next = $lotteries[$i + 1];
            foreach (config('app.all_animals') as $subNumber) {
                if (! isset($stats[$lottery['spec']])) {
                    $stats[$lottery['spec']] = [];
                    if (! isset($stats[$lottery['spec']][$subNumber])) {
                        $stats[$lottery['spec']][$subNumber] = ['total' => 1, 'success' => 0];;
                    } else {
                        $stats[$lottery['spec']][$subNumber]['total'] += 1;
                    }
                } else {
                    if (! isset($stats[$lottery['spec']][$subNumber])) {
                        $stats[$lottery['spec']][$subNumber] = ['total' => 1, 'success' => 0];
                    } else {
                        $stats[$lottery['spec']][$subNumber]['total'] += 1;
                    }
                }

                if ($subNumber === $next['spec']) {
                    $stats[$lottery['spec']][$subNumber]['success'] += 1;
                }
            }
        }

        foreach ($stats as $name => $allSub) {
            echo $name.PHP_EOL;

//            $allRate = 0;
            foreach ($allSub as $subName => $subInfo) {
                $rate = bcdiv($subInfo['success'], $subInfo['total'], 3) * 100;
//                $allRate = bcadd($allRate, $rate, 3);
                echo $subName.':'.$rate.'%'.PHP_EOL;
            }
            echo '------------'.PHP_EOL;
        }
    }
}
