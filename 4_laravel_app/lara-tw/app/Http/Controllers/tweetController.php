<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\tweet;

class tweetController extends Controller
{
    public function showTimelinePage()
    {
        $tweets = tweet::latest()->get();
        // dd($tweets);
        return view('timeline', ['tweets' => $tweets]);
    }

    public function postTweet(Request $request)
    {
        $validator = $request->validate([
            'tweet' => ['required', 'string', 'max:280'],
        ]);
        tweet::create([
            'user_id' => Auth::user()->id,
            'tweet' => $request->tweet,
        ]);

        return back();
    }

    public function destroy($id)
    {
        // dd($id);
        $tweet = tweet::find($id);
        // dd($tweet);
        $tweet->delete();

        return redirect()->route('timeline');
    }
}
