<?php

namespace App\Console;

use App\Http\Models\News;
use App\Http\models\NewsSource;
use DateTime;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CreateNewsDataCommand extends Command
{
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert news data to database';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'news:create';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $newsCount = News::query()->count();

        if ($newsCount > 0) {
            $this->error(sprintf('Already news data exists.'));
            exit();
        }

        try {
            $response = Http::get($this->getNewsUrl());
            $newsData = $response->json()['articles'];

            foreach ($newsData as $news) {
                $publishedAt = new DateTime($news['publishedAt']);

                $createdNews = News::query()->create([
                    'title' => $news['title'] ? $news['title'] : '',
                    'author' => $news['author'] ? $news['author'] : '',
                    'description' => $news['description'] ? $news['description'] : '',
                    'url' => $news['url'] ? $news['url'] : '',
                    'image_url' => $news['urlToImage'] ? $news['urlToImage'] : '',
                    'content' => $news['content'] ? $news['content'] : '',
                    'published_at' => $publishedAt,
                ]);

                NewsSource::query()->create([
                    'news_id' => $createdNews->id,
                    'name' => $news['source']['name'],
                ]);

                $this->info(sprintf('News data created with id: %s', $createdNews->id));

            }
        } catch (Exception $e) {
            Log::error($e);
            throw new Exception('Cannot insert news data');
        }
    }

    protected function getKey()
    {
        return config('app.news_api_key');
    }

    protected function getNewsUrl()
    {
        return 'https://newsapi.org/v2/everything?q=tesla&sortBy=publishedAt&apiKey='.$this->getKey();
    }
}
