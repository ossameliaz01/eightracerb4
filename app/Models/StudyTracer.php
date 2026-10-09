<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyTracer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'jalur_masuk',
        'program_studi',
        'perguruan_tinggi',
    ];

    /**
     * Get the user (student) that owns the study tracer.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the informasi UKT records associated with the study tracer.
     */
    public function informasiUkts()
    {
        return $this->hasMany(InformasiUkt::class);
    }
}
