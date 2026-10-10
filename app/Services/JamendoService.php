<?php

namespace App\Services;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

class JamendoService
{
    public function searchTracks(?string $query, int $limit = 10): array
    {
        $clientId = config('services.jamendo.client_id');

        // Senza chiave API o senza testo da cercare non ha senso chiamare Jamendo
        if (blank($clientId) || blank($query)) {
            return [];
        }

        try {
            $response = Http::timeout(5)->get(config('services.jamendo.base_url') . '/tracks/', [
                'client_id' => $clientId,
                'format' => 'json',
                'limit' => $limit,
                'search' => $query,
                'include' => 'musicinfo licenses',
                'audioformat' => 'mp32',
            ]);
        } catch (ConnectionException $e) {
            report($e);

            return [];
        }

        if ($response->failed()) {
            return [];
        }

        return $response->json('results') ?? [];
    }
}
