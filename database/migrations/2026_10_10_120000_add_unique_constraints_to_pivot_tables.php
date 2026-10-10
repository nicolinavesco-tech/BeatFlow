<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

// Impedisce di salvare due volte la stessa coppia nelle tabelle pivot
// (es. lo stesso brano due volte nella stessa playlist).
return new class extends Migration
{
    private array $pivots = [
        'artist_user' => ['user_id', 'artist_id'],
        'song_user' => ['user_id', 'song_id'],
        'playlist_song' => ['playlist_id', 'song_id'],
    ];

    public function up(): void
    {
        foreach ($this->pivots as $table => $columns) {
            $this->removeDuplicates($table, $columns);

            Schema::table($table, function (Blueprint $table) use ($columns) {
                $table->unique($columns);
            });
        }
    }

    public function down(): void
    {
        foreach ($this->pivots as $tableName => $columns) {
            Schema::table($tableName, function (Blueprint $table) use ($tableName, $columns) {
                // MySQL usa l'indice unico anche per la foreign key sulla prima colonna:
                // prima di eliminarlo serve un indice semplice che lo sostituisca
                if (! Schema::hasIndex($tableName, [$columns[0]])) {
                    $table->index($columns[0]);
                }
                $table->dropUnique($columns);
            });
        }
    }

    // Tiene la riga più vecchia di ogni coppia e cancella le copie
    private function removeDuplicates(string $table, array $columns): void
    {
        $duplicates = DB::table($table)
            ->select($columns)
            ->selectRaw('MIN(id) as keep_id')
            ->groupBy($columns)
            ->havingRaw('COUNT(*) > 1')
            ->get();

        foreach ($duplicates as $duplicate) {
            $query = DB::table($table)->where('id', '!=', $duplicate->keep_id);
            foreach ($columns as $column) {
                $query->where($column, $duplicate->$column);
            }
            $query->delete();
        }
    }
};
