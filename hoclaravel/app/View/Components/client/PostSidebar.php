<?php

namespace App\View\Components\client;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Admin\Post;
use App\Models\Category;

class PostSidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $catgories = Category::orderBy('id', 'asc')->where('style','post')->get();
        $newestPosts = Post::orderBy('created_at', 'desc')->take(4)->get();
        return view('components.client.post-sidebar',[
            'newestPosts' => $newestPosts,
            'categories' => $catgories,
        ]);
    }
}
