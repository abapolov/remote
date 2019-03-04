<?php

namespace App\Parsers;

/**
 * Class Wfh
 * @package App\Parsers
 */
class Wfh implements ParserInterface
{
    const SOURCE_URL = 'https://weworkremotely.com/categories/sales-and-marketing.rss';

    /**
     * Parser from Wfh
     *
     * @return array|mixed
     * @throws \Exception
     */
    public function parse()
    {
        $jobs = [];

        $response = new \SimpleXmlElement(file_get_contents(self::SOURCE_URL));

        foreach($response->entry as $item) {
            $job['source']            = 'Wfh';
            $job['title']             = (string) $item->title;
            $job['description']       = (string) $item->content;
            $job['apply_description'] = '';
            $job['apply_url']         = (string) $item->link->attributes()->href;
            $fc = file_get_contents((string) $item->link->attributes()->href);
            preg_match('/<small> @ (.+)<\/small>/', $fc, $matches);
            $job['company']           = trim($matches[1]);
            $job['company_url']       = '';
            $job['company_logo']      = '';

            array_push($jobs, $job);
        }

        return $jobs;
    }
}