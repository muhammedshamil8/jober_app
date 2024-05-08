<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;

class  Job extends Model
{
    use HasFactory;
    protected $table = 'job_listing';
    protected $fillable = ['employer_id','title' , 'salary'];

//    public static function find($id): array
//    {
//        $job =  Arr::first(static::all() , fn($job) => $job['id'] == $id);
//        if (!$job){
//            abort(404);
//        }
//        return $job;
//    }
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
