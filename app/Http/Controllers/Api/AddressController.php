<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AddressResource;
use App\Models\Address;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

/**
 * @group  Address
 *
 * APIs for address
 */
class AddressController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return AnonymousResourceCollection
     */
    public function index(Request $request): AnonymousResourceCollection {
        $address = Address::where('user_id', '=', $request->user()->id)->get();
        return AddressResource::collection($address);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse {
        $address = Address::create([
            'city' => $request->input('city'),
            'district' => $request->input('district'),
            'ward' => $request->input('ward'),
            'address' => $request->input('address'),
            'user_id' => $request->user()->id,
        ]);
        if ($address) {
            return \response()->json(['message' => 'created address success']);
        } else {
            return \response()->json(['message' => 'created address fail'], 409);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return AddressResource
     */
    public function show(int $id): AddressResource {
        $address = Address::findOrFail($id);
        return new AddressResource($address);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, int $id): Response {
        $address = Address::findOrFail($id);
        $address->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse {
        try {
            Address::findOrFail($id)->delete();
            return response()->json(['message' => 'deleted address success']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 409);
        }
    }
}
