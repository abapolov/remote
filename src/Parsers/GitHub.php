<?php

namespace App\Parsers;

/**
 * Class GitHub
 * @package App\Parsers
 */
class GitHub implements ParserInterface
{
    const SOURCE_URL = 'https://jobs.github.com/positions.json?location=remote';

    /**
     * Parser from GitHub
     *
     * @return array|mixed
     * @throws \Exception
     */
    public function parse()
    {
        $jobs = [];
        $data = json_decode(file_get_contents(self::SOURCE_URL), true);

        foreach ($data as $item) {
            $job['source']            = 'GitHub';
            $job['title']             = $item['title'];
            $job['description']       = $item['description'];
            $job['apply_description'] = $item['how_to_apply'];
            $job['apply_url']         = $item['url'];
            $job['company']           = $item['company'];
            $job['company_url']       = $item['company_url'];
            $job['company_logo']      = $item['company_logo'];

            array_push($jobs, $job);
        }

        return $jobs;
    }
}