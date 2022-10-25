<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        $pages = Page::query()
            ->paginate(30);

        return view('user.templates', [
            'pages' => $pages
        ]);
    }

    public function getTemplates(Request $request)
    {
        $pages = Page::query()
            ->where('niche', $request->niche)
            ->get();

        return response()->json($pages);
    }

        /**
     * Edit the given page with the page builder.
     *
     * @param int|null $pageId
     * @throws Throwable
     */
    public function build($pageId = null)
    {
        $route = $_GET['route'] ?? null;
        $action = $_GET['action'] ?? null;
        $pageId = is_numeric($pageId) ? $pageId : ($_GET['page'] ?? null);
        $pageRepository = new \PHPageBuilder\Repositories\PageRepository();
        $page = $pageRepository->findWithId($pageId);

        $phpPageBuilder = app()->make('phpPageBuilder');
        $pageBuilder = $phpPageBuilder->getPageBuilder();

        $customScripts = view("pagebuilder.scripts")->render();
        $pageBuilder->customScripts('head', $customScripts);

        $pageBuilder->handleRequest($route, $action, $page);
    }
}
