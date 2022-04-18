<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;


class ParserController extends Controller
{
    public function index(Category $category, News $news,) {
        $xml = XMLParser::load('https://lenta.ru/rss');
        $this->getNews($xml, $category);

        $xml = XMLParser::load('https://news.yandex.ru/music.rss');
        $this->getNewsMusic($xml, $category);
        return view('admin.allNews', [
            'news' => News::orderByDesc('created_at')->paginate(10),
            'categories' => Category::all(),
            'categoriesTitle' => Category::query()->select(['id', 'title'])->get() //???
        ]);

    }

    public function getNews($xml, Category $category) {

        $data = $xml->parse([
            'title' => ['uses' => 'channel.title'],
            'link' => ['uses' => 'channel.link'],
            'description' => ['uses' => 'channel.description'],
            'news' => ['uses' => 'channel.item[title,link,description,pubDate,enclosure::url,category]'],
        ]);

        foreach ($data['news'] as $news) {

            $categoryTitle = $news['category'];

            $categoryId = $category->getCategoryId($categoryTitle);

            //Проверка - есть ли такая новость в БД
            $newsInSystem = News::query()
                ->where('title', $news['title'])
                ->first();

            if (is_null($newsInSystem)) {
                $newsInSystem = new News();

                $newsInSystem->fill([
                    'category_id' => $categoryId,
                    'title' => $news['title'],
                    'text' => $news['description'],

                ]);
                $newsInSystem->save();
            }

        }
    }

    public function getNewsMusic($xml, Category $category) {

        $data = $xml->parse([
            'title' => ['uses' => 'channel.title'],
            'link' => ['uses' => 'channel.link'],
            'description' => ['uses' => 'channel.description'],
            'news' => ['uses' => 'channel.item[title,link,description,pubDate]'],
        ]);


        foreach ($data['news'] as $news) {

            $categoryTitle = 'Музыка';

            $categoryId = $category->getCategoryId($categoryTitle);

            //Проверка - есть ли такая новость в БД
            $newsInSystem = News::query()
                ->where('title', $news['title'])
                ->first();

            if (is_null($newsInSystem)) {
                $newsInSystem = new News();

                $newsInSystem->fill([
                    'category_id' => $categoryId,
                    'title' => $news['title'],
                    'text' => $news['description'],

                ]);
                $newsInSystem->save();
            }
        }
    }

}
