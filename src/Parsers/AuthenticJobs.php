<?php

namespace App\Parsers;

/**
 * Class AuthenticJobs
 * @package App\Parsers
 */
class AuthenticJobs implements ParserInterface
{
    const SOURCE_URL = 'https://authenticjobs.com/rss/custom.php?terms=&type=1,2,3,4,5,6,7&cats=&onlyremote=1&location=';

    /**
     * Parser from AuthenticJobs
     *
     * @return array|mixed
     * @throws \Exception
     */
    public function parse()
    {
        $jobs = [];

        $response = new \SimpleXmlElement(file_get_contents(self::SOURCE_URL));

        foreach ($response->channel->item as $item) {
            $explodedTitle = explode(':', (string) $item->title);

            $job['source']            = 'AuthenticJobs';
            $job['title']             = (string) (count($explodedTitle) > 1) ? trim($explodedTitle[1]) : trim($item->title);
            $job['description']       = (string) $item->description;
            $job['apply_description'] = '';
            $job['apply_url']         = (string) $item->guid;
            $job['company']           = trim($explodedTitle[0]);
            $job['company_url']       = '';
            $job['company_logo']      = '';

            array_push($jobs, $job);
        }

        return $jobs;
    }
}