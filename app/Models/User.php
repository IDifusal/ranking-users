<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rank()
    {
        $users = User::all();
        $users = $users->sortByDesc(function ($user) {
            return $user->rankPoints();
        });
        $rank = 1;
        foreach ($users as $user) {
            $user->ranking = $rank;
            $user->save();
            $rank++;
        }
    }

    public function rankPoints()
    {
        $aprovedCourses = DB::table('course_records')->where('user_id', $this->id)->where('grade', '>=', 12)->get();
        $puntaje = 1;
        foreach($aprovedCourses as $curse){
            $today = Carbon::now();
            $completed_at = new Carbon($curse->completed_at);
            $puntaje = $today->diffInDays($completed_at) * count($aprovedCourses) * $curse->grade / $curse->attempts;
        }
        return $puntaje;
    }
}
