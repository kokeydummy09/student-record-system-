<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Students extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'date_of_birth',
        'gender',
        'email',
        'course',
        'year_level',
    ];

    protected static array $searchable = [
        'studId'   => 'student_id',
        'name'   => 'full_name',
        'email'  => 'email',
        'course' => 'course',
        'year'   => 'year_level',
    ];

    public function scopeSearch($query, ?string $term = null, ?string $field = null)
    {
        $term = trim((string) ($term ?? ''));

        if ($term === '') {
            return $query;
        };

        if ($field && isset(self::$searchable[$field])) {
            $column = self::$searchable[$field];
            return $query->where($column, 'like', "%{$term}%");
        };

        return $query->where(function ($q) use ($term) {
            foreach (self::$searchable as $column) {
                $q->orWhere($column, 'like', "%{$term}%");
            }
        });
    }

    protected function course(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => $value !== null ? mb_strtoupper(trim($value), 'UTF-8') : null,
        );
    }

    protected $casts = ['date_of_birth' => 'date'];
}
