<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        // Gunakan method post() untuk mengirim permintaan POST ke rute 'send-email'.
        $response = $this->post(route('send-email'), [
            'name' => 'Nama Anda',
            'email' => 'email@example.com',
            'message' => 'Isi pesan Anda',
        ]);

        // Periksa status respons untuk memastikan sesuai dengan yang diharapkan.
        $response->assertStatus(200); // Pastikan respons sesuai dengan yang diharapkan.
    }
}
