<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReservationTest extends TestCase
{
    use RefreshDatabase;

    public function testUnauthorizedUserCannotStoreReservation()
    {
        // Giả lập yêu cầu không hợp lệ hoặc không được phép
        $response = $this->post('/reserve', [
            'customer_name' => 'John Doe',
            'customer_email' => 'john@example.com',
            'customer_phone' => '123456789',
            'reservation_time' => '2024-08-07 19:00:00',
            'guest_count' => 4,
            'deposit' => 1000,
            'special_request' => 'Window seat',
        ]);

        $response = $this->post('/reservations', [
            'special_request' => 'Window seat',
        ]);

        $response->assertStatus(403);
    }
}
