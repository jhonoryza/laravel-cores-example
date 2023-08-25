<?php

use App\Contracts\PaymentInterface;
use App\Services\OvoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

it('can pay with gopay', function () {

    $res = $this->postJson('/api/users', [
        'type' => 'create'
    ]);

    $res->assertStatus(200)->assertJson([
        'data' => 'create payment from gopay'
    ]);
});

test('it can pay with ovo', function () {
    $this->app->bind(PaymentInterface::class, OvoService::class);
    $resp = $this->postJson('/api/users', [
        'type' => 'create'
    ]);
    $resp->assertStatus(200)->assertJson([
        'data' => 'create payment from ovo'
    ]);
});
