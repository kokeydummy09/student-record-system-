<?php
namespace App\Observers;

use App\Models\Students;

class StudentObserver
{
    public function created(Students $student)
    {
        if (empty($student->student_id)) {
            $student->student_id = 'STU-' . str_pad($student->id, 6, '0', STR_PAD_LEFT);
            $student->saveQuietly();
        }
    }
}