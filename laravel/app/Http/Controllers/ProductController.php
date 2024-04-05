<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function fetchDataFromLazadaAPI(Request $request)
    {
        $page = $request->input('page', 1); // Default to page 1
        $searchQuery = $request->input('q', 'All-Products'); // Default search query

        try {
            $response = Http::get("https://lazada.vn/catalog/?ajax=true&page={$page}&q={$searchQuery}&spm=a2o4n.store_product.search.d_go.62b5b045S1cyAg");
            $data = $response->json();                
            $productList = $data['mods']['listItems'];
            
            foreach ($productList as $productData) {
                // Extract data from the JSON and create a new Product model instance
                $product = new Product();
                $product->name = $productData['name'];
                $product->nid = $productData['nid'];
                $product->itemId = $productData['itemId'];
                // Insert other fields similarly
                
                // Save the product to the database
                $product->save();
            }
            
            
            // Refine data if needed
            $refinedData = []; // Adjust this according to your needs

            return response()->json($refinedData); // Return refined data as JSON response to client
        } catch (\Exception $e) {
            // Log or handle the exception appropriately
            return response()->json(['error' => 'Error fetching data from Lazada API'], 500);
        }
    }
}
