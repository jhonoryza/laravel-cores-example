<?php

namespace App\Http\Controllers;

use App\Contracts\PaymentInterface;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        return response()->json($data);
    }


    /* $data = User::query() */
    /*     ->when($request->search, fn ($query) => $query->where('name', 'like', '%' . $request->search . '%')) */
    /*     ->simplePaginate(10); */
    /**/


    public function store(Request $request, PaymentInterface $payment): JsonResponse
    {
        if ($request->type == 'create') {
            $data = $payment->createPayment();
        } else {
            $data = $payment->cancelPayment();
        }

        return response()->json([
            'data' => $data,
            'message' => 'success'
        ]);
    }
}
