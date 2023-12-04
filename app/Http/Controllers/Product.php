<?php

namespace App\Http\Controllers;

use App\Models\Collection as CollectionModel;
use App\Models\Product as ProductModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class Product extends Controller {
    public function index( Request $request, $collectionId = null ): View {
        $collection = null;
        if ( $collectionId ) {
            $items      = ProductModel::where( 'shop_id', Auth::user()->id )->where( 'collection_id', $collectionId )->get();
            $collection = CollectionModel::find( $collectionId );
        } else {
            $items = ProductModel::where( 'shop_id', Auth::user()->id )->get();
        }

        return view( 'products.index', [
            'pageTitle'  => 'Products',
            'products'   => $items,
            'collection' => $collection,
        ] );
    }

    public function add( Request $request, $collectionId = null ): View {

        return view( 'products.add', [
            'pageTitle'    => 'Add A New Product',
            'collectionId' => $collectionId,
            'collections'  => CollectionModel::select( [ 'id', 'name' ] )->where( 'shop_id', Auth::user()->id )->where( 'status', 1 )->get(),
        ] );
    }

    public function save( Request $request ): RedirectResponse {
        $product = new ProductModel();
        if ( empty( $request->collection ) ) {
            abort( 401, 'Invalid Collection' );
        }

        $collection = CollectionModel::find( $request->collection );
        if ( ! $collection ) {
            abort( 404, 'Collection not found' );
        }

        $product->name          = $request->name;
        $product->collection_id = $collection->id;
        $product->description   = $request->description;
        $product->status        = (bool) $request->status;
        $product->shop_id       = auth()->user()->id;
        $product->save();

        return Redirect::away( URL::shopifyRoute( 'products.index' ) )->with( 'notice', '🎉 Product created successfully.');
    }

    public function edit( Request $request, $productId ): View {
        $product = ProductModel::find( $productId );

        if ( ! $product ) {
            abort( 404 );
        }

        return view( 'products.edit', [
            'pageTitle'   => 'Edit Product: ' . $product->name,
            'product'     => $product,
            'collections' => CollectionModel::select( [ 'id', 'name' ] )->where( 'shop_id', Auth::user()->id )->where( 'status', 1 )->get(),
        ] );
    }

    public function update( Request $request, $productId ): RedirectResponse {
        $product = ProductModel::find( $productId );
        if ( ! $product ) {
            abort( 404 );
        }

        if ( empty( $request->collection ) ) {
            abort( 401, 'Invalid Collection' );
        }

        $collection = CollectionModel::find( $request->collection );
        if ( ! $collection ) {
            abort( 404, 'Collection not found' );
        }

        $product->name          = $request->name;
        $product->description   = $request->description;
        $product->collection_id = $collection->id;
        $product->status        = (bool) $request->status;
        //$product->shop_id     = auth()->user()->id;
        $product->save();

        return Redirect::away( URL::shopifyRoute( 'products.index' ) )->with( 'notice', '🎉 Product updated successfully.');;
    }

    public function delete( Request $request, $productId ): RedirectResponse {
        $product = ProductModel::find( $productId );
        if ( ! $product ) {
            abort( 404, 'Product not found' );
        }

        $product->delete();
        return Redirect::away( URL::shopifyRoute( 'products.index' ) )->with( 'notice', '🎉 Product deleted successfully.');
    }
}
