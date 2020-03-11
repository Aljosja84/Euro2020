<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use TwitterStreamingApi;

class ListenForHashTags extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'twitter:listen-for-hash-tags';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Listen for hashtags being used on Twitter';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function hasUrl($tweet) {
        $reg_exUrl = "@((https?://)?([-\\w]+\\.[-\\w\\.]+)+\\w(:\\d+)?(/([-\\w/_\\.]*(\\?\\S+)?)?)*)@";

        if(preg_match_all($reg_exUrl, $tweet))
        {
            return true;
        } else {
            return false;
        }
    }

    function has_bad_words($badwords, $string) {

        foreach (str_word_count($string, 1) as $word) {
            foreach ($badwords as $bw) {
                if (stripos($word, $bw) === 0) {
                    return true;
                }
            }
            return false;
        }

    }
    public function handle()
    {
        //setLocale('nl') -- only dutch tweets
        TwitterStreamingApi::publicStream()
            ->whenHears('#livatm', function (array $tweet) {
              // check if the tweet contains a link -
              // if so, don't do anything
              if(!$this->hasUrl($tweet['text'])) {
                  //check if the tweet has certain words in it
                  $banned_words = array("Live", "Stream", "Link", "Broadcast", "RT");
                  if (!$this->has_bad_words($banned_words, $tweet['text'])) {
                      // remove all hashtags from the tweet to tidy it up
                      $re = '/#\w+\s*/';
                      $result = preg_replace($re, '', $tweet['text']);
                      $tweet['text'] = $result;
                      // finally remove all newlines from the tweet
                      $tweet['text'] = preg_replace('/\s+/', ' ', trim($tweet['text']));
                      // insert the tweets into the database
                      DB::table('tweets')->insert([
                              'userName' => "{$tweet['user']['screen_name']}",
                              'tweet' => "{$tweet['text']}",
                              'avatar_url' => "{$tweet['user']['profile_image_url_https']}",
                              'created_at' => \Carbon\Carbon::now()->getPreciseTimestamp(4),
                              'place' => 'nergens'
                          ]
                      );
                      // dump the tweet into the terminal
                      dump("{$tweet['user']['screen_name']} tweeted {$tweet['text']}");
                  }
              }
            })
            ->startListening();
    }
}
