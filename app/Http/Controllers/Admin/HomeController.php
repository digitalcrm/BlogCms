<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user\User;
use App\Model\user\category;
use App\Model\user\post;
use App\Model\user\tag;
use Illuminate\Http\Request;
use App\Charts\ViewsChart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Count the data form database
     *
     * @package default
     * @author 
     **/
    public function index()
    {
    	$userCount = User::count();

        $publishedPostsCount = post::where('created_at', '!=', null)->count();

        $publishedCategoriesCount = tag::where('created_at', '!=', null)->count();

        $publishedTagsCount = category::where('created_at', '!=', null)->count();

       //for bar chart
        $chart = new ViewsChart;
        $chart->labels(['tags', 'category', 'posts', 'users']);
        $dataset = $chart->dataset('Number of Records', 'bar', [$publishedTagsCount, $publishedCategoriesCount, $publishedPostsCount, $userCount]);
        $dataset->backgroundColor(collect(['#7158e2','#3ae374', '#ff3838', '#7158e2']));
        $dataset->color(collect(['#7d5fff','#32ff7e', '#ff4d4d', '#7158e2']));

       //for doughnut chart1
        $linechart = new ViewsChart;
        $linechart->labels(['tags', 'category', 'posts', 'users']);
        $dataset = $linechart->dataset('Number of Records', 'doughnut', [$publishedTagsCount, $publishedCategoriesCount, $publishedPostsCount, $userCount]);
        $dataset->backgroundColor(collect(['#ff6384','#36a2eb', '#cc65fe', '#ffce56']));
        $dataset->color(collect(['#7d5fff','#32ff7e', '#ff4d4d', '#7158e2']));

        return view('admin.home')->with([
            'user_count' => $userCount, 
            'published_post_count' => $publishedPostsCount,
            'published_category_count' => $publishedCategoriesCount,
            'published_Tag_count' => $publishedTagsCount,
            'chart' => $chart,
            'linechart' => $linechart
        ]);
    }

}
