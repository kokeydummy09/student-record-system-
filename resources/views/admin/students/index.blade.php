<x-layouts.admin-layout title="Students • SRS">
    <div class="flex items-center gap-2 w-full mb-4">
        <a href="{{ route('admin.students.create') }}" class="btn btn-primary">+ New Student</a>
        <x-students.search-form :q="$q" :field="$field" />
    </div>

    <div class="bg-base-100 rounded-lg shadow-sm p-4">
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
                            <x-students.actions :student="$student" />
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-6">No students found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <!-- Pagination links -->
        <div class="p-4">
            {{ $students->links() }}
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('js/admin-students.js') }}"></script>
    @endpush
</x-layouts.admin-layout>
