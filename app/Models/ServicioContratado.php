<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicioContratado extends Model
{
    use HasFactory;
    protected $table = 'servicio_contratado';
    protected $fillable = [
        'estadoservicio', 'observacion', 'id_plan_internet',
        'id_plan_tvcable', 'id_plan_llamada','id_combo_promo'
    ];

    public function plan_internet()
    {
        return $this->belongsTo(Planinternet::class, 'id_plan_internet', 'id');
    }

    public function plan_tvcable()
    {
        return $this->belongsTo(PlanTvCable::class, 'id_plan_tvcable', 'id');
    }

    public function plan_llamadas()
    {
        return $this->belongsTo(PlanLlamada::class, 'id_plan_llamadas', 'id');
    }

    public function combo()
    {
        return $this->belongsTo(ComboPromo::class, 'id_combo', 'id');
    }
}
