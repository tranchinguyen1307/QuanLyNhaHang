<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {

        $reservations = Reservation::where('status', 'Đã thanh toán')->get();

        $cart = session('cart', []);

        $reservationsWithTotal = $reservations->map(function ($reservation) use ($cart) {
            // Lấy các sản phẩm liên quan đến bàn này từ cart
            $items = array_filter($cart, function ($item) use ($reservation) {
                return $item['reservation_id'] == $reservation->id;
            });

            return $reservation;
        });

        return view('admin.pages.Invoices.list', compact('reservationsWithTotal', 'cart'));
    }

    public function updatePaymentStatus(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);

        $reservation->status = 'Đã thanh toán';
        $reservation->save();
        session()->flash('success', 'Thanh toán thành công!');
        $cart = session('cart', []);

        return view('admin.pages.Invoices.invoice', compact('reservation', 'cart'));
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('admin.invoices.list')
            ->with('success', 'Đặt bàn đã được xóa thành công.');
    }
}
