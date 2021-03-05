<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class GetApiWP extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'GetApiWp:Day';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $listApiWp = DB::table('wp_list_api')->get()->toArray();
        foreach ($listApiWp as $apiWp) {
            if (!empty($apiWp->url)) {
                @$response = $this->getByUrl($apiWp->url.'/wp-json/wp/v2/posts/?_embed&per_page=100');

                if ($response) {
                    foreach ($response as $post) {
                        $newPost = new \App\Post();
                        $newPost->setAttribute('title', $post['title']['rendered']);
                        $newPost->setAttribute('content', $post['content']['rendered']);
                        $newPost->setAttribute('tag', '');
                        $newPost->save($post);
                        $image = @$this->saveImage($post['_embedded']['wp:featuredmedia'][0]['source_url'], $newPost->id);

                        if (!empty($image)) {
                            $newPost->thumbnail = $image;
                        } else {
                            $newPost->thumbnail = '';
                        }
                        $newPost->save();
                    }
                }
            }
        }
    }

    private function getByUrl($url)
    {
        @$client = new \GuzzleHttp\Client();
        @$response = $client->request('GET', $url, ['timeout' => 100]);
        @$status = $response->getStatusCode();
        if($status == 200){
            @$body = $response->getBody()->getContents();
            @$body = json_decode($body, true);
            $return = [];
            foreach($body as $item)
                $return[] = $item;
            return $return;
        }
    }

    private function saveImage($url, $name) {
        $type = explode('.', $url);
        $type = $type[count($type) - 1];
        $img = public_path('images_post/'.$name.'.'.$type);
        $content = file_get_contents($url);
        file_put_contents($img, $content);

        return 'images_post/'.$name.'.'.$type;
    }
}
