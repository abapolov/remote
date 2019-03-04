<?php

namespace App\Parsers;

/**
 * Class Hubstaff
 * @package App\Parsers
 */
class Hubstaff implements ParserInterface
{
    const SOURCE_URL = 'https://talent.hubstaff.com/feeds/jobs.rss';

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
            $job['source']            = 'Hubstaff';
            $job['title']             = (string) $item->title;
            $job['description']       = (string) $item->description;
            $job['apply_description'] = '';
            $job['apply_url']         = (string) $item->link;
            $job['company']           = (string) $item->company;
            $job['company_url']       = (string) $item->company_url;
            $job['company_logo']      = '';

            array_push($jobs, $job);
        }

        return $jobs;
    }
}