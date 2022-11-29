<?php

namespace App\Scrapers;

use App\Models\Proxy;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;

class ProxyScrapper
{
    private Client $client;


    public function __construct()
    {
        $this->client = new Client(HttpClient::create(['verify_peer' => false, 'verify_host' => false]));
    }

    public function scrapeProxy() {
        $url = 'https://free-proxy-list.net/';
        $proxy = $this->client->request('GET', $url);
        $proxy->filter('.table.table-striped.table-bordered > tbody > tr')->each(function ($node){
           $i = 0;
           $proxy_and_port = '';
           $node->filter('td')->each(function ($node) use (&$i, &$proxy_and_port){
                if ($i >= 2) return;
                $pero = $node->text();
                $proxy_and_port = $proxy_and_port . $pero . ":";
                $i++;
            });

           $new_proxy = substr($proxy_and_port, 0,-1 );

           if((new Proxy())->where('proxy', $new_proxy)->exists()) { return;}

            Proxy::create(['proxy' => $new_proxy]);

        });
//        dd($pero);
    }
}
