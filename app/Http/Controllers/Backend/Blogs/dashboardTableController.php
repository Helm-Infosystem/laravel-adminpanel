<?php

namespace App\Http\Controllers\Backend\Blogs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\Blogs\ManageBlogsRequest;
use App\Http\Requests\Backend\Blogs\StoreBlogsRequest;
use App\Http\Requests\Backend\Blogs\UpdateBlogsRequest;
use App\Http\Responses\Backend\Blog\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Repositories\Backend\BlogsRepository;
use Illuminate\Support\Facades\View;


class dashboardTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\BlogsRepository
     */
    protected $repository;

    /**
     * @param \App\Repositories\Backend\BlogsRepository $repository
     */
    public function __construct(BlogsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param \App\Http\Requests\Backend\Blogs\ManageBlogsRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageBlogsRequest $request)
    {
        return Datatables::of($this->repository->getForDataTable())
            ->escapeColumns(['name'])
            ->addColumn('status', function ($blogs) {
                return $blogs->status;
            })
            ->addColumn('publish_datetime', function ($blogs) {
                return $blogs->publish_datetime->format('d/m/Y h:i A');
            })
            ->addColumn('created_by', function ($blogs) {
                return $blogs->user_name;
            })
            ->addColumn('created_at', function ($blogs) {
                return $blogs->created_at->toDateString();
            })
            ->addColumn('actions', function ($blogs) {
                return $blogs->action_buttons;
            })
            ->make(true);
    }
}
