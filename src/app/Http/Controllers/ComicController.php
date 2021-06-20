<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Magazine;
use App\Author;
use App\Comic;

use App\Http\Requests\ComicRequest;

class ComicController extends Controller
{
    public function index(Request $request) { 
 
        /* Comicモデルからデータベースを取得 */
          $items = Comic::all();   
        
          return view('comic.index', ['items' => $items]);
        } 
        
        /* 追加ページ */
        public function add(Request $request) {
          $items = [
            'magazines' => Magazine::all(),
            'authors' => Author::all(),
          ];        
          return view('comic.add', $items);
        }
        
        /* 追加処理 */
        public function create(ComicRequest $request) {       
          if(isset($request->image)) {
            $path = $request->file('image')->store('images', 'public');
            $image = basename($path);
        }else {
            $image = '';
        }        
      
        /* データベースへの追加処理 */
        $comic = new Comic;
        $form = [
            'comic_name' => $request->comic_name,
            'magazine_id' => $request->magazine_id,
            'author_id' => $request->author_id,
            'description' => $request->description,
            'image' => $image,
        ];
        unset($form['_token']);
      
        $comic->fill($form)->save();
      
        return redirect('/comic');
        }
}
