<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;

class ShopController extends Controller
{





    public function __construct() {
        $this->middleware("auth:owner");
        $this->middleware(function($request, $next) {
            $id = $request->route()->parameter('shop');
            if(!is_null($id)) {
                $shopOwnerId = Shop::findOrFail($id)->owner->id;
                 $shopId = (int)$shopOwnerId;
                 $ownerId = Auth::id();
                 if($shopId !== $ownerId) {
                    abort(404);
                 }
            }
            return $next($request);
        });
    }

    public function index() {
        //$ownerId = Auth::id(); // ログインしているオーナーのIDを取得
        // 認証されたオーナーIDで検索して関連するshopを全て取得（後々1人のオーナーが複数のショップを持つことを想定した実装）
        $shops = Shop::where('owner_id', Auth::id())->get(); // owner_id が現在認証されているユーザーのID（Auth::id()で取得）と一致するすべてのショップを取得
        return view('owner.shop.index', compact('shops'));
    }

    public function edit() {
        
    }

    public function update() {
        
    }
}
