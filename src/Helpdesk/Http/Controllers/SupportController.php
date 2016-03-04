<?php

namespace Modules\Helpdesk\Http\Controllers;

use Modules\Helpdesk\Entities\Category;
use Vain\Http\Controllers\Controller;

class SupportController extends Controller
{
    public function index()
    {
        $this->authorize('index', Category::class);

        $categories = Category::with('contents')->simplePaginate(config('support.categories_per_page'));

        return view('support::index', [
            'categories' => $categories,
        ]);
    }
}
