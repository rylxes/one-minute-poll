<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\NotificationType;

class NotificationTypeApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_notification_type()
    {
        $notificationType = NotificationType::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/notification_types', $notificationType
        );

        $this->assertApiResponse($notificationType);
    }

    /**
     * @test
     */
    public function test_read_notification_type()
    {
        $notificationType = NotificationType::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/notification_types/'.$notificationType->id
        );

        $this->assertApiResponse($notificationType->toArray());
    }

    /**
     * @test
     */
    public function test_update_notification_type()
    {
        $notificationType = NotificationType::factory()->create();
        $editedNotificationType = NotificationType::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/notification_types/'.$notificationType->id,
            $editedNotificationType
        );

        $this->assertApiResponse($editedNotificationType);
    }

    /**
     * @test
     */
    public function test_delete_notification_type()
    {
        $notificationType = NotificationType::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/notification_types/'.$notificationType->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/notification_types/'.$notificationType->id
        );

        $this->response->assertStatus(404);
    }
}
