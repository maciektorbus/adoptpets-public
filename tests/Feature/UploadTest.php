<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
 
class UploadTest extends TestCase
{
    public function test_avatars_can_be_uploaded(): void
    {
        Storage::fake('avatars');
 
        $file = UploadedFile::fake()->image('avatar.jpg');
 
        $response = $this->post('/avatar', [
            'avatar' => $file,
        ]);
 
        Storage::disk('avatars')->assertExists($file->hashName());
    }
}
