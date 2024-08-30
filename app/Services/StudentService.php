<?php

namespace App\Services;

use App\Models\Student;

class StudentService
{
    public function getAllStudents()
    {
        return Student::all();
    }

    public function createStudent(array $data)
    {
        return Student::create($data);
    }

    public function getStudentById($id)
    {
        return Student::findOrFail($id);
    }

    public function updateStudent($id, array $data)
    {
        $student = $this->getStudentById($id);
        $student->update($data);
        return $student;
    }

    public function deleteStudent($id)
    {
        $student = $this->getStudentById($id);
        $student->delete();
        return $student;
    }
}
