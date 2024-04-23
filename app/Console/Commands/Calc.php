<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Calc extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calc:normal';

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

        $animalsStats = [
            '鼠' => [
                '鼠' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '牛' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '虎' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '兔' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '龙' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '蛇' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '马' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '羊' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猴' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '鸡' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '狗' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猪' => [
                    'total' => 0,
                    'success' => 0,
                ],
            ],
            '牛' => [
                '鼠' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '牛' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '虎' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '兔' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '龙' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '蛇' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '马' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '羊' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猴' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '鸡' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '狗' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猪' => [
                    'total' => 0,
                    'success' => 0,
                ],
            ],
            '虎' => [
                '鼠' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '牛' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '虎' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '兔' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '龙' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '蛇' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '马' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '羊' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猴' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '鸡' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '狗' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猪' => [
                    'total' => 0,
                    'success' => 0,
                ],
            ],
            '兔' => [
                '鼠' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '牛' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '虎' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '兔' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '龙' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '蛇' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '马' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '羊' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猴' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '鸡' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '狗' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猪' => [
                    'total' => 0,
                    'success' => 0,
                ],
            ],
            '龙' => [
                '鼠' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '牛' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '虎' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '兔' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '龙' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '蛇' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '马' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '羊' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猴' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '鸡' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '狗' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猪' => [
                    'total' => 0,
                    'success' => 0,
                ],
            ],
            '蛇' => [
                '鼠' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '牛' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '虎' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '兔' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '龙' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '蛇' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '马' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '羊' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猴' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '鸡' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '狗' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猪' => [
                    'total' => 0,
                    'success' => 0,
                ],
            ],
            '马' => [
                '鼠' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '牛' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '虎' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '兔' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '龙' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '蛇' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '马' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '羊' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猴' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '鸡' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '狗' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猪' => [
                    'total' => 0,
                    'success' => 0,
                ],
            ],
            '羊' => [
                '鼠' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '牛' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '虎' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '兔' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '龙' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '蛇' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '马' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '羊' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猴' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '鸡' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '狗' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猪' => [
                    'total' => 0,
                    'success' => 0,
                ],
            ],
            '猴' => [
                '鼠' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '牛' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '虎' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '兔' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '龙' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '蛇' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '马' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '羊' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猴' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '鸡' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '狗' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猪' => [
                    'total' => 0,
                    'success' => 0,
                ],
            ],
            '鸡' => [
                '鼠' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '牛' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '虎' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '兔' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '龙' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '蛇' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '马' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '羊' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猴' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '鸡' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '狗' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猪' => [
                    'total' => 0,
                    'success' => 0,
                ],
            ],
            '狗' => [
                '鼠' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '牛' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '虎' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '兔' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '龙' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '蛇' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '马' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '羊' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猴' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '鸡' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '狗' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猪' => [
                    'total' => 0,
                    'success' => 0,
                ],
            ],
            '猪' => [
                '鼠' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '牛' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '虎' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '兔' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '龙' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '蛇' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '马' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '羊' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猴' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '鸡' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '狗' => [
                    'total' => 0,
                    'success' => 0,
                ],
                '猪' => [
                    'total' => 0,
                    'success' => 0,
                ],
            ],
        ];

        foreach ($lotteries as $i => $lottery) {
            foreach ($lottery['animals'] as $animalName) {
                if (!isset($lotteries[$i + 1])) {
                    break;
                }

                $next = $lotteries[$i + 1];
                foreach (config('app.all_animals') as $subAnimalName) {
                    $animalsStats[$animalName][$subAnimalName]['total'] += 1;

                    if (in_array($subAnimalName, $next['animals'])) {
                        $animalsStats[$animalName][$subAnimalName]['success'] += 1;
                    }
                }
            }
        }

        foreach ($animalsStats as $name => $allSub) {
            echo $name . PHP_EOL;
            foreach ($allSub as $subName => $subInfo) {
                if ($subInfo['total'] == 0) {
                    $rate = 0;
                } else {
                    $rate = bcdiv($subInfo['success'], $subInfo['total'], 3) * 100;
                }

                echo $subName . ':' . $rate . '%' . PHP_EOL;
            }
        }
    }
}
