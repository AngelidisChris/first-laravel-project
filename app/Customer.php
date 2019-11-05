<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * Scope a query to only include active users.
     * @param $query
     * @return mixed
     */

    protected $attributes = [
        'active' => 0,
        'company_id' =>1
    ];

    /**
     * Accessor
     * @param $attribute
     * @return mixed
     */
    public function getActiveAttribute($attribute)
    {
        return $this->activeOptions()[$attribute];
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    /**
     * * Scope a query to only include inactive users.
     * @param $query
     * @return mixed
     */
    public function scopeInactive($query)
    {
        return $query->where('active', 0);
    }

    public function activeOptions()
    {
        return [
            0 => 'Active',
            1 => 'Inactive',
            2 => 'In Progress'

        ];
    }



    protected $fillable = [
        'name', 'email', 'active', 'company_id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
