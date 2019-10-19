<?php

namespace Tests\Feature\Http\Controllers\Frontend\Auth;

use App\Models\Access\User\User;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Frontend\Auth\LoginController
 */
class LoginControllerTest extends TestCase
{
    /** @test */
    public function the_login_route_exists()
    {
        $this->get('/login')->assertStatus(200);
    }

    /**
     * @test
     */
    public function a_user_can_login_with_email_and_password()
    {
        $user = factory(User::class)->create([
            'email'    => 'john@example.com',
            'password' => 'secret',
        ]);

        $response = $this->post(route('frontend.auth.login'), [
            'email'    => 'john@example.com',
            'password' => 'secret',
        ]);

        $this->assertAuthenticatedAs($user);

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function logout_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->get(route('frontend.auth.logout'));

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function logout_as_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->get(route('frontend.auth.logout-as'));

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function show_login_form_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('frontend.auth.login'));

        $response->assertOk();

        // TODO: perform additional assertions
    }

    // test cases...
}
