<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformasiUkt extends Model
{
    use HasFactory;

    protected $table = 'informasi_ukt';

    public $timestamps = false; // We only have dicatat_pada, not created_at/updated_at

    protected $fillable = [
        'study_tracer_id',
        'periode',
        'penerima_kipk',
        'beasiswa',
        'ukt',
        'ipi',
        'dicatat_pada',
        'diinput_oleh',
    ];

    protected $casts = [
        'penerima_kipk' => 'boolean',
        'beasiswa' => 'array',
        'ukt' => 'decimal:2',
        'ipi' => 'decimal:2',
        'dicatat_pada' => 'datetime',
    ];

    /**
     * Get the study tracer that owns this UKT info.
     */
    public function studyTracer()
    {
        return $this->belongsTo(StudyTracer::class);
    }

    /**
     * Get the user who inputted this data.
     */
    public function diinputOleh()
    {
        return $this->belongsTo(User::class, 'diinput_oleh');
    }
}
