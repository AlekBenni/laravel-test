<?php

    namespace App\Http\Controllers;

    use App\City;
    use App\Country;
    use App\Post;
    use App\Rubric;
    use App\Tag;
// use Dotenv\Validator;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Support\Facades\Cookie;
    use Illuminate\Support\Facades\Cache;
    use Illuminate\Http\Request;

    class HomeController extends Controller
    {

        public function index(Request $request)
        {

            Cache::flush();

            if(Cache::has('posts')){
                $posts = Cache::get('posts');
            }else{
                $posts = Post::orderBy('id', 'desc')->get();
                Cache::put('posts', $posts);
            }


            $title = 'Home page';

            return view('home', compact('title', 'posts'));
        }

        public function create()
        {
            $title = 'Create page';
            $rubrics = Rubric::pluck('title', 'id')->all();
            return view('create', compact('title', 'rubrics'));
        }

        public function store(Request $request)
        {
            $this->validate($request, [
                'title' => 'required|min:5|max:100',
                'content' => 'required',
                'rubric_id' => 'integer'
            ]);

            Post::create($request->all());

            $request->session()->flash('success', 'Данные сохранены');

            return redirect()->route('home');
        }
    }











