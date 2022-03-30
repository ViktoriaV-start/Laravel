<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\News;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class savejson extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'save:json';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Создать и сохранить файл json';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(News $news, Category $categories)
    {
        File::put(storage_path() . '/news.json', json_encode($news->getNews(), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        File::put(storage_path() . '/category.json', json_encode($categories->getCategories(), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        // В скобках: ( 1) указать полный путь, чтобы тесты могли корректно находить файл,
        // 2) перекодировать данные в json-формат(обратиться к моделе и получить все новости-данные, флаги для вывода в читабельном виде);

        return 0;
    }
}
