<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request as FRequest; // allows ::all
use Illuminate\Http\Request; // allows ->all
use App\Models\Review;
use Inertia\Inertia;


class AdminReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Admin/AdminReviews', [
            'filters' => FRequest::all('search', 'category'),
            'data' => Review::with('user', 'thing')
                ->join('things', 'reviews.thing_id', '=', 'things.id')
                ->orderBy('reviews.id', 'desc') // consider using ->latest() which is equivalent to ->orderBy('created_at', 'desc')
                ->filter(FRequest::only('search', 'category')) // Models/Review.php scopeFilter()
                ->paginate(5)
                ->withQueryString() // adds the filter query string to to paginated links
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
