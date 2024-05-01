<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = [
        'hypothesis_id',
        'name',
        'description',
        'value',
        'is_accurate', // Tambahkan kolom baru
    ];

    public function hypothesis()
    {
        return $this->belongsTo(Hypothesis::class);
    }
    

    public function patientHasAccurateCase()
    {
        // Dapatkan semua riwayat penyakit pasien ini
        $patientHistories = self::where('name', $this->name)->get();

        // Periksa apakah setidaknya satu penyakit memiliki nilai akurat (true)
        foreach ($patientHistories as $history) {
            if ($history->is_accurate) {
                return true;
            }
        }

        return false;
    }

}