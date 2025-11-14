@extends('layouts.adminLayout')

@section('content')
    <a href={{ route('admin.students.create') }} class="btn btn-primary btn-sm mb-4">New Student</a>

    <div class="bg-base-100 rounded-lg shadow-sm overflow-hidden">
        <div class="p-4">
            <div class="overflow-x-auto">
                <table class="table table-zebra w-full">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Course</th>
                            <th>Year</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($students as $student)
                            <tr>
                                <td>{{ $student->student_id }}</td>
                                <td>{{ $student->full_name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->course }}</td>
                                <td>{{ $student->year_level }}</td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-xs">View</a>
                                    <a href={{ route('admin.students.edit', $student) }}
                                        class="btn btn-xs btn-ghost">Edit</a>
                                    <form action="{{ route('admin.students.destroy', $student) }}" method="POST"
                                        class="inline-block" onsubmit="return confirm('Delete this student?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-xs btn-error">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-6">No students found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
