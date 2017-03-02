<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Response;
use App\WcRequests;

class WcRequestsController extends Controller
{
    /**
     * Index of surveys
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $wc_request = WcRequests::all();

        return view('survey.index', compact('surveys'));
    }

    /**
     * Show that survey is complete
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getWcrequestDone($id)
    {
        $wc_request = WcRequests::findOrFail($id);

        return view('survey.done', compact('survey'));
    }

    /**
     * Return surveys questions
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getWcRequests($id)
    {
        $wc_request = WcRequests::findOrFail($id);

        return view('survey.show', compact('survey'));
    }

    /**
     * Store survey response
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function postWcRequests($id, Request $request)
    {
        $wc_request = WcRequests::findOrFail($id);

        $this->validate($request, $wc_request->rules());

        $response = new Response(['ip' => $request->ip()]);
        $wc_request->addResponse($response);
        $response->answerQuestions($wc_request->questions, collect($request->all()));

        return redirect()->action('WcRequestsController@getWcrequestDone', ['id' => $wc_request->id]);
    }
}
