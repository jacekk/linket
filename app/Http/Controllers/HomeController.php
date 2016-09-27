<?php

namespace App\Http\Controllers;

use Roumen\Feed\Feed;

use Illuminate\Http\Request;

use App\Link;
use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'links' => Link::all()->sortByDesc('created'),
        ]);
    }

    public function feed()
    {
        $feed = \App::make('feed');
        $feed->setCache();

        if (! $feed->isCached()) {
            $this->rebuildFeedItems($feed);
            $this->rebuildFeed($feed);
        }

        return $feed->render('atom');
    }

    protected function rebuildFeed(Feed & $feed)
    {
        $feed->title = sprintf('RSS | %s', config('app.name'));
        $feed->pubdate = array_get($feed->getItems(), '0.pubdate');
        $feed->link = url('feed');
        $feed->setDateFormat('datetime'); // 'datetime', 'timestamp' or 'carbon'
        $feed->setShortening(false); // false to turn off text shortening

        // $feed->setTextLimit(100); // maximum length of description text
        // $feed->description = null;
        // $feed->logo = null;
        // $feed->icon = null;
        // $feed->lang = null;
    }

    protected function rebuildFeedItems(Feed & $feed)
    {
        $links = \DB::table('links')
            ->orderBy('created', 'desc')
            ->limit(20)
            ->get();

        foreach ($links as $link) {
            $feed->add(
                $link->title,
                $link->author,
                $link->url,
                $link->created,
                $link->description
            );
        }
    }
}
