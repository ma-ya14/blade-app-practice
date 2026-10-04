<?php

// このファイルが属する名前空間（ディレクトリ構造に対応）を定義します
namespace App\Http\Controllers;

// HTTPリクエストを処理するためのRequestクラスをインポートします
use Illuminate\Http\Request;

/**
 * ProductControllerという新しいクラスを定義し、
 * Laravel標準のControllerクラスの機能を受け継ぎます（extends）
 */
class ProductController extends Controller
{
    /**
     * 商品一覧画面を表示するためのindexメソッドを定義します
     */
    public function index()
    {
        // ビュー（画面）に渡すためのサンプルデータをコレクションとして定義する
        $products = collect([
            // 1つ目の商品データ（オブジェクト形式）
            (object) [
                'name' => 'ノートパソコン', // 商品名
                'category' => '電子機器',  // カテゴリ
                'price' => 89800,          // 価格（円）
                'in_stock' => true         // 在庫状況（true: 在庫あり）
            ],
            // 2つ目の商品データ（オブジェクト形式）
            (object) [
                'name' => 'ワイヤレスマウス', // 商品名
                'category' => '周辺機器',   // カテゴリ
                'price' => 3980,           // 価格（円）
                'in_stock' => true         // 在庫状況（true: 在庫あり）  
            ],
            // 3つ目の商品データ（オブジェクト形式）
            (object) [
                'name' => 'USBハブ',       // 商品名
                'category' => '周辺機器',   // カテゴリ
                'price' => 2480,           // 価格（円）
                'in_stock' => false        // 在庫状況（false: 在庫なし）  
            ],
        ]);

        // 定義したサンプルデータや変数をビュー（resources/views/products/index.blade.php）に渡して返却する
         return view('products.index', [
            'pageTitle' => '商品一覧',           // 画面のタイトル
            'products' => $products,             // 商品データのコレクション
            'lastUpdated' => '2024年1月1日 12:00', // 最終更新日時
        ]);
    }
    // indexメソッドおよびクラスの終了位置を示すコメント
}