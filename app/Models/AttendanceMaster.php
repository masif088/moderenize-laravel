<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int id
 * @property string attendance_date
 * @property string status
 * @property string created_at
 * @property string updated_at
 */
class AttendanceMaster extends Model
{
//$table->date('attendance_date');
//$table->string('status');
    use HasFactory;
    protected $fillable=['attendance_date', 'status'];

    public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class,'master_id');
    }

}
