<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    public function index()
    {
        //user diambil dari model nya yang ada belongsTo
        $transactions = Transaction::with('user', 'book')->get();

        if ($transactions->isEmpty()) {
            return response()->json([
                "success" => true,
                "message" => "Resource data not found"
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "Get all resources",
            "data" => $transactions
        ], 200);
    }

    public function show(string $id)
    {
        $transactions = Transaction::with('user', 'book')->find($id);

        if (!$transactions) {
            return response()->json([
                'success' => false,
                'message' => 'Resource not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get detail resource',
            'data' => $transactions
        ]);
    }

    public function store(Request $request)
    {
        // 1. validator & cek validator
        $validator = Validator::make($request->all(), [
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'data' => $validator->errors()
            ], 422);
        }

        // 2. generate order_number dan harus unique | ORD-0003
        $uniqueCode = "ORD-" . strtoupper(uniqid());

        // 3. ambil user yang sedang login pakai token & cek login apakah ada data user?
        $user = auth('api')->user();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 401);
        }

        // 4. mencari data buku dari request
        $book = Book::find($request->book_id);

        // 5. cek stock buku
        if ($book->stock < $request->quantity) {
            return response()->json([
                'success' => false,
                'message' => 'Stok barang tidak cukup'
            ], 400);
        }

        // 6. hitung total harga -> price * quantity
        $totalAmount = $book->price * $request->quantity;

        // 7. kurangi stok buku
        $book->stock -= $request->quantity;
        $book->save(); // untuk melakukan update data

        // 8. simpan data transaksi
        $transactions = Transaction::create([
            'order_number' => $uniqueCode,
            'customer_id' => $user->id,
            'book_id' => $request->book_id,
            'total_amount' => $totalAmount
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Transaction created successfully',
            'data' => $transactions
        ], 201);
    }

    public function update(string $id, Request $request)
    {
        // cari data
        $transactions = Transaction::with('user', 'book')->find($id);

        if (!$transactions) {
            return response()->json([
                'success' => false,
                'message' => 'Transaction not found'
            ], 404);
        }

        // validator
        $validator = Validator::make($request->all(), [
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        // cari data buku dari request
        $book = Book::find($request->book_id);

        // cek stok buku
        if ($book->stock < $request->quantity) {
            return response()->json([
                'success' => false,
                'message' => 'Stok barang tidak cukup'
            ], 400);
        }

        // hitung total harga
        $totalAmount = $book->price * $request->quantity;

        // kurangin stok
        $book->stock -= $request->quantity;
        $book->save();

        // siapin data yang ingin di update
        $data = [
            'book_id' => $request->book_id,
            'quantity' => $request->quantity,
            'total_amount' => $totalAmount,
        ];

        // update data baru ke database
        $transactions->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Tansaction updated successfully',
            'data' => $transactions
        ], 200);
    }

    public function destroy(string $id)
    {
        $transactions = Transaction::find($id);

        if (!$transactions) {
            return response()->json([
                'success' => false,
                'message' => 'Transaction not found'
            ], 404);
        }

        $transactions->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete transaction successfully'
        ], 200);
    }
}
