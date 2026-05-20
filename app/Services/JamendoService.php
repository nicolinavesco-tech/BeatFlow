<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class JamendoService
{
    private string $baseUrl;
    private string $clientId;

    public function __construct()
    {
        $this->baseUrl = config('services.jamendo.base_url');
        $this->clientId = config('services.jamendo.client_id');
    }

    public function searchTracks(string $query, int $limit = 20): array
    {
        $response = Http::get($this->baseUrl . '/tracks/', [
            'client_id' => $this->clientId,
            'format' => 'json',
            'limit' => $limit,
            'search' => $query,
            'include' => 'musicinfo licenses',
            'audioformat' => 'mp32',
        ]);

        if ($response->failed()) {
            return [];
        }

        return $response->json('results') ?? [];
    }
}