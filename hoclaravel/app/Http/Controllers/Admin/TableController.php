<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tables\StorePostRequest;
use App\Models\Product;
use App\Models\Reservation;
use App\Models\ReservationItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TableController extends Controller
{
    public function index()
    {

        $reservation = Reservation::where('status', '!=', 'Đã thanh toán')->get();

        return view('admin.Modules.Tables.table', compact('reservation'));
    }

    public function create()
    {
        $reservation = Reservation::all();

        return view('admin.Modules.Tables.create-table', compact('reservation'));
    }

    public function store(StorePostRequest $request)
    {
        $validatedData = $request->validated();

        Reservation::create($validatedData);

        return redirect()->route('admin.table.index')->with('success', 'Bàn đã được thêm thành công.');
    }

    //cập nhật
    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        $products = Product::all();

        return view('admin.Modules.Tables.edit-table', compact('reservation', 'products'));
    }

    public function update(StorePostRequest $request, $id)
    {

        $validatedData = $request->validated();

        $reservation = Reservation::findOrFail($id);
        $reservation->update($validatedData);

        return redirect()->route('admin.table.index', $id)->with('success', 'Thông tin bàn đã được cập nhật thành công.');
    }

    public function table_manager()
    {
        $reservation = Reservation::all();

        return view('admin.Modules.Tables.table_manager', compact('reservation'));
    }

    public function show($id)
    {

        $reservation = Reservation::with('items.product')->findOrFail($id);

        $products = Product::all();

        return view('admin.Modules.Tables.table_manager', compact('reservation', 'products'));
    }

    public function checkout($id)
    {

        $reservation = Reservation::findOrFail($id);

        $cart = Session::get('cart', []);

        return view('admin.Modules.Tables.check_out', compact('reservation', 'cart'));
    }

    public function updateStatus(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->status = $request->input('status');
        $reservation->save();

        return redirect()->route('admin.table.index')->with('success', 'Trạng thái đã được cập nhật thành công.');
    }

    public function addItem(Request $request, $id)
    {
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity')[$product_id];

        $product = Product::findOrFail($product_id);

        $cart = Session::get('cart', []);
        $cart[$product_id] = [
            'reservation_id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $quantity,
            'total' => $product->price * $quantity,
        ];

        Session::put('cart', $cart);

        return redirect()->back()->with('success', 'Đã thêm món vào giỏ hàng.');
    }

    public function checkoutRes(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);

        // Cập nhật trạng thái của đặt bàn thành 'Thanh toán thành công'
        $reservation->status = 'Thanh toán thành công';
        $reservation->save();

        // Lưu các món ăn đã chọn vào bảng reservation_items
        $cart = Session::get('cart', []);
        foreach ($cart as $product_id => $details) {
            ReservationItem::create([
                'reservation_id' => $reservation->id,
                'product_id' => $product_id,
                'quantity' => $details['quantity'],
                'price' => $details['price'],
                'total' => $details['total'],
            ]);
        }

        Session::forget('cart');

        return redirect()->route('admin.invoice.list')->with('success', 'Thanh toán thành công và đặt bàn đã được cập nhật.');
    }

    // xóa bàn
    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('admin.table.index')->with('success', 'Đặt bàn đã được xóa thành công.');
    }

    public function updatePaymentStatus(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);

        $reservation->status = 'Đã thanh toán';
        $reservation->save();
        session()->flash('success', 'Thanh toán thành công!');
        $cart = session('cart', []);

        return view('admin.Modules.Invoices.invoice', compact('reservation', 'cart'));
    }
}
