<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SpecCode extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calc:speccode';

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
        $allNumbers = [
            '01',
            '02',
            '03',
            '04',
            '05',
            '06',
            '07',
            '08',
            '09',
            '10',
            '11',
            '12',
            '13',
            '14',
            '15',
            '16',
            '17',
            '18',
            '19',
            '20',
            '21',
            '22',
            '23',
            '24',
            '25',
            '26',
            '27',
            '28',
            '29',
            '30',
            '31',
            '32',
            '33',
            '34',
            '35',
            '36',
            '37',
            '38',
            '39',
            '40',
            '41',
            '42',
            '43',
            '44',
            '45',
            '46',
            '47',
            '48',
            '49',
        ];

        $lotteries = \App\Models\Lottery::orderBy('date', 'asc')->get()->toArray();

        $stats = [];

        foreach ($lotteries as $i => $lottery) {
            if (! isset($lotteries[$i + 1])) {
                break;
            }

            $next = $lotteries[$i + 1];
            foreach ($allNumbers as $subNumber) {
                if (! isset($stats[$lottery['spec_code']])) {
                    $stats[$lottery['spec_code']] = [];
                    if (! isset($stats[$lottery['spec_code']][$subNumber])) {
                        $stats[$lottery['spec_code']][$subNumber] = ['total' => 1, 'success' => 0];;
                    } else {
                        $stats[$lottery['spec_code']][$subNumber]['total'] += 1;
                    }
                } else {
                    if (! isset($stats[$lottery['spec_code']][$subNumber])) {
                        $stats[$lottery['spec_code']][$subNumber] = ['total' => 1, 'success' => 0];
                    } else {
                        $stats[$lottery['spec_code']][$subNumber]['total'] += 1;
                    }
                }

                if ($subNumber === $next['spec_code']) {
                    $stats[$lottery['spec_code']][$subNumber]['success'] += 1;
                }
            }
        }

        ksort($stats);

        foreach ($stats as $name => $allSub) {
            echo $name.PHP_EOL;

            $allRate = 0;
            foreach ($allSub as $subName => $subInfo) {
                $rate = bcdiv($subInfo['success'], $subInfo['total'], 3) * 100;
                $allRate = bcadd($allRate, $rate, 3);
                echo $subName.':'.$rate.'%'.PHP_EOL;
            }
            echo '------------'.PHP_EOL;
        }
    }
}
