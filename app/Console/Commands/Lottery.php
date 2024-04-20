<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\DomCrawler\Crawler;

class Lottery extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:lottery';

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
        $years = [2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022, 2023, 2024];
        foreach ($years as $year) {
            $content = file_get_contents('./data/'.$year.'.html');
            print_r($content);exit;
            $crawler = new Crawler($content);

            $n = 0;
            $issue = '';
            $date = '';

            $crawler->filterXPath("//div[@class='con']/div")->each(function (Crawler $node) use (&$n, &$issue, &$date) {
                $n++;

                $content = $node->text();
                $animals = [];

                if ($n % 2 == 1) {
                    if (preg_match('/第(.*?)期.*?\((.*?)年(.*?)月(.*?)日\)/', $content, $matches)) {
                        $issue = $matches[1];
                        $date = sprintf('%d-%d-%d', $matches[2], $matches[3], $matches[4]);
                    }
                } else {
                    if (preg_match_all('/(鼠|牛|虎|兔|龙|蛇|马|羊|猴|鸡|狗|猪)/', $content, $matches)) {
                        $animals = $matches[1];
                    }
                    if (preg_match_all('/(\d+)/', $content, $matches)) {
                        $specCode = $matches[1][count($matches[1]) - 1];
                    }

                    \App\Models\Lottery::create([
                        'issue' => $issue,
                        'date' => $date,
                        'animals' => array_values(array_unique($animals)),
                        'spec_code' => $specCode,
                    ]);
                }
            });
        }
    }
}
