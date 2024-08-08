<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StoreReservationRequest;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Session;

class ClientBookTableController extends Controller
{
    public function index()
    {
        return view('client.pages.bookTable');
    }

    public function store(StoreReservationRequest $request)
    {

        $validatedData = $request->validated();

        $deposit_per_person = 100000;
        $total_deposit = $validatedData['guest_count'] * $deposit_per_person;

        Session::put('reservation', array_merge($validatedData, ['deposit' => $total_deposit]));

        return redirect()->route('client.reservations.payment');
    }

    public function payment()
    {

        $reservation = Session::get('reservation');

        if (! $reservation) {
            return redirect()->route('client.dat-ban.index')->with('error', 'Không tìm thấy thông tin đặt bàn.');
        }

        return view('client.pages.checkOut', compact('reservation'));
    }

    public function complete(Request $request)
    {

        $reservation = Session::get('reservation');

        if (! $reservation) {
            return redirect()->route('client.dat-ban.index')->with('error', 'Không tìm thấy thông tin đặt bàn.');
        }

        Session::forget('reservation');
        $reservation['status'] = 'Đã thanh toán cọc';
        Reservation::create($reservation);

        return redirect()->route('client.dat-ban.index')->with('success', 'Đặt bàn thành công và đã thanh toán cọc!');
    }
}
