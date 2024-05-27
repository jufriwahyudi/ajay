<?php

namespace App\Controllers;

use DOMDocument;
use DOMXPath;

class Home extends BaseController
{
    public function index(): string
    {
        return view('tugas_dua');
    }
    public function listdata(): string
    {
        return view('list_data');
    }
    public function scrapping(): string
    {
        $httpClient = new \GuzzleHttp\Client();
        $response = $httpClient->get('https://aceh.tribunnews.com/tag/aceh-jaya');
        $htmlString = (string) $response->getBody();
        libxml_use_internal_errors(true);
        $doc = new DOMDocument();
        $doc->loadHTML($htmlString);
        $xpath = new DOMXPath($doc);
        $titles = $xpath->evaluate('//ul[@class="lsi"]//li//h3//a');
        $link = $xpath->evaluate('//ul[@class="lsi"]//li//a');
        $images = $xpath->evaluate('//ul[@class="lsi"]//li//img');
        $contents = $xpath->evaluate('//ul[@class="lsi"]//li//h4');
        $timestamp = $xpath->evaluate('//ul[@class="lsi"]//li//div[@class="grey pt5"]//span[@class="grey"]');
        $hasil = [];
        foreach ($titles as $key => $title) {
            $hasil[] = [
                'title' => $title->textContent,
                'body' => $contents[$key]->textContent,
                'link' => $images[$key]->getAttribute('href'),
                'image' => $images[$key]->getAttribute('src'),
                'timestamp' => $timestamp[$key]->textContent
            ];
        }
        $data['hasil'] = $hasil;
        $response = $httpClient->get('https://aceh.tribunnews.com/tag/calang');
        $htmlString = (string) $response->getBody();
        libxml_use_internal_errors(true);
        $doc = new DOMDocument();
        $doc->loadHTML($htmlString);
        $xpath = new DOMXPath($doc);
        $titles = $xpath->evaluate('//ul[@class="lsi"]//li//h3//a');
        $link = $xpath->evaluate('//ul[@class="lsi"]//li//a');
        $images = $xpath->evaluate('//ul[@class="lsi"]//li//img');
        $contents = $xpath->evaluate('//ul[@class="lsi"]//li//h4');
        $timestamp = $xpath->evaluate('//ul[@class="lsi"]//li//div[@class="grey pt5"]//span[@class="grey"]');
        $hasil2 = [];
        foreach ($titles as $key => $title) {
            $hasil2[] = [
                'title' => $title->textContent,
                'body' => $contents[$key]->textContent,
                'link' => $link[$key]->getAttribute('href'),
                'image' => $images[$key]->getAttribute('src'),
                'timestamp' => $timestamp[$key]->textContent
            ];
        }
        $data['calang'] = $hasil2;
        return view('list_data2', $data);
        return json_encode($hasil2);
    }
}
