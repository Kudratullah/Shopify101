<?php

namespace App\Http\Controllers;

use App\Models\Collection as CollectionModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;

class Collection extends Controller {
    public function index(): View {
        return view( 'collections.index', [
            'pageTitle'   => 'Collections',
            'collections' => CollectionModel::where( 'shop_id', Auth::user()->id )->get(),
        ] );
    }

    public function add(): View {
        return view( 'collections.add', [ 'pageTitle' => 'Add A New Collection' ] );
    }

    public function save( Request $request ): RedirectResponse {
        $collection = new CollectionModel();
        $collection->name        = $request->name;
        $collection->description = $request->description;
        $collection->shop_id     = auth()->user()->id;
        $collection->save();

        return Redirect::away( URL::shopifyRoute( 'collections.index' ) )->with( 'notice', '🎉 Collection created successfully.');
    }

    public function edit( Request $request, $collectionId ): View {
        $collection = CollectionModel::find( $collectionId );

        if ( ! $collection ) {
            abort( 404 );
        }

        return view( 'collections.edit', [
            'pageTitle'  => 'Edit Collection: ' . $collection->name,
            'collection' => $collection
        ] );
    }

    public function update( Request $request, $collectionId ): RedirectResponse {
        $collection = CollectionModel::find( $collectionId );
        if ( ! $collection ) {
            abort( 404 );
        }

        $collection->name        = $request->name;
        $collection->description = $request->description;
        $collection->status      = (bool) $request->status;
        $collection->shop_id     = auth()->user()->id;
        $collection->save();

        return Redirect::away( URL::shopifyRoute( 'collections.index' ) )->with( 'notice', '🎉 Collection updated successfully.');;
    }

    public function delete( Request $request, $collectionId ): RedirectResponse {
        $collection = CollectionModel::find( $collectionId );
        if ( ! $collection ) {
            abort( 404 );
        }

        $collection->delete();
        return Redirect::away( URL::shopifyRoute( 'collections.index' ) )->with( 'notice', '🎉 Collection deleted successfully.');
    }
}
