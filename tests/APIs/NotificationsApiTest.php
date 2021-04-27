<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Notifications;

class NotificationsApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_notifications()
    {
        $notifications = Notifications::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/notifications', $notifications
        );

        $this->assertApiResponse($notifications);
    }

    /**
     * @test
     */
    public function test_read_notifications()
    {
        $notifications = Notifications::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/notifications/'.$notifications->id
        );

        $this->assertApiResponse($notifications->toArray());
    }

    /**
     * @test
     */
    public function test_update_notifications()
    {
        $notifications = Notifications::factory()->create();
        $editedNotifications = Notifications::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/notifications/'.$notifications->id,
            $editedNotifications
        );

        $this->assertApiResponse($editedNotifications);
    }

    /**
     * @test
     */
    public function test_delete_notifications()
    {
        $notifications = Notifications::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/notifications/'.$notifications->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/notifications/'.$notifications->id
        );

        $this->response->assertStatus(404);
    }
}
