<?php

namespace App\Parsers;

/**
 * Class StackOverflow
 * @package App\Parsers
 */
class StackOverflow implements ParserInterface
{
    const SOURCE_URL = 'http://careers.stackoverflow.com/jobs/feed?allowsremote=True';

    /**
     * Parser from StackOverflow
     *
     * @return array|mixed
     * @throws \Exception
     */
    public function parse()
    {
        $jobs = [];

        $response = new \SimpleXmlElement(file_get_contents(self::SOURCE_URL));

        foreach($response->channel->item as $item) {
            $job['source']            = 'StackOverflow';
            $job['title']             = (string) current(explode(' at ', $item->title));
            $job['description']       = (string) $item->description;
            $job['apply_description'] = '';
            $job['apply_url']         = (string) $item->link;
            preg_match('/ at (.+)\(/U', (string) $item->title, $matches);
            $job['company']           = trim($matches[1]);
            $job['company_url']       = '';
            $job['company_logo']      = '';

            array_push($jobs, $job);
        }

        return $jobs;
    }
}