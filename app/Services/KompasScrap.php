<?php

namespace App\Services;

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

/**
 * Class KompasScrap.
 */
class KompasScrap
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getAllNews()
    {
        $url = 'https://tekno.kompas.com/search/' . date('Y-m-d');
        $response = $this->client->get($url);

        $html = $response->getBody();

        $crawler = new Crawler($html);

        $articles = $crawler->filter(".article__list.clearfix")->each(function ($node) {
            return [
                'title' => $node->filter(".article__list__title h3 a")->text(),
                'link' => $node->filter(".article__list__title h3 a")->attr("href"),
                'image' => $node->filter(".article__asset img")->attr("data-src"),
                'category' => $node->filter(".article__subtitle")->text(),
                'date' => $node->filter(".article__date")->text()
            ];
        });
        return $articles;
    }

    public function readNews($url){
        $response = $this->client->get($url);

        $html = $response->getBody($response);

        $crawler = new Crawler($html);

        return [
            'title' => $crawler->filter('.read__title')->text(),
            'image' => $crawler->filter('.cover-photo')->html(),
            'info' => $crawler->filter('.read__time')->text(),
            'category' => $crawler->filter('.breadcrumb__item')->eq(2)->text(),
            'content' =>$article = $crawler->filter('.read__content .clearfix')->html()
        ];
    }
}
