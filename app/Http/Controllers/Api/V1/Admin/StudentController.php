<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Http\Resources\StudentResource;
use App\Services\StudentService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class StudentController extends Controller
{
    protected $studentService;

    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }

    public function index(): JsonResponse
    {
        $students = $this->studentService->getAllStudents();
        return response()->json(StudentResource::collection($students), Response::HTTP_OK);
    }

    public function store(StudentRequest $request): JsonResponse
    {
        $student = $this->studentService->createStudent($request->validated());
        return response()->json(new StudentResource($student), Response::HTTP_CREATED);
    }

    public function show($id): JsonResponse
    {
        $student = $this->studentService->getStudentById($id);
        return response()->json(new StudentResource($student), Response::HTTP_OK);
    }

    public function update(StudentRequest $request, $id): JsonResponse
    {
        $student = $this->studentService->updateStudent($id, $request->validated());
        return response()->json(new StudentResource($student), Response::HTTP_OK);
    }

    public function destroy($id): JsonResponse
    {
        $this->studentService->deleteStudent($id);
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}