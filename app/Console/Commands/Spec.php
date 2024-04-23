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
    protected $signature = 'calc:spec {year} {mode}';

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
        $year = $this->argument('year');
        $mode = $this->argument('mode');

        if ($year == 1) {
            $lotteries = \App\Models\Lottery::orderBy('date', 'asc')->get()->toArray();
        } else {
            $lotteries = \App\Models\Lottery::whereYear('date', '>=', 2021)->orderBy('date', 'asc')->get()->toArray();
        }

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
                if ($mode == 1) { // 基础
                    echo sprintf('%s %s%%', $subName, $rate) . PHP_EOL;
                } else { // 进阶
                    echo sprintf('%s %s/%s = %s%%', $subName, $subInfo['success'], $subInfo['total'], $rate) . PHP_EOL;
                }
            }
            echo '------------'.PHP_EOL;
        }
    }
}
