@extends('layouts.adminLayout')

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="card bg-base-100 shadow-lg overflow-hidden">
            <div class="card-body p-6 md:p-8">
                <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                    <div class="avatar">
                        <div
                            class="w-28 h-28 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2 overflow-hidden">
                            <img src="https://i.pravatar.cc/300?u={{ $student->id }}" alt="avatar"
                                class="object-cover w-full h-full" />
                        </div>
                    </div>

                    <div class="flex-1 w-full">
                        <div class="flex items-start justify-between">
                            <div>
                                <h1 class="text-2xl md:text-3xl font-bold">{{ $student->full_name }}</h1>
                                <div class="mt-2 flex items-center gap-2">
                                    <span class="badge badge-outline">{{ $student->student_id ?? '—' }}</span>
                                    <span class="text-xs text-gray-500">Student ID</span>
                                </div>
                            </div>

                            <div class="flex gap-2">
                                <a href="{{ route('admin.students.edit', $student) }}"
                                    class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{ route('admin.students.index') }}" class="btn btn-ghost btn-sm">Back</a>
                            </div>
                        </div>

                        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                            <div class="bg-base-200 p-4 rounded-lg">
                                <div class="text-xs text-muted mb-1">Email</div>
                                <div class="font-medium wrap-break-word">{{ $student->email }}</div>
                            </div>

                            <div class="bg-base-200 p-4 rounded-lg">
                                <div class="text-xs text-muted mb-1">Date of birth</div>
                                <div class="font-medium">{{ $student->date_of_birth->toFormattedDateString() }}</div>
                            </div>

                            <div class="bg-base-200 p-4 rounded-lg">
                                <div class="text-xs text-muted mb-1">Gender</div>
                                <div class="font-medium">{{ $student->gender ?? '—' }}</div>
                            </div>

                            <div class="bg-base-200 p-4 rounded-lg">
                                <div class="text-xs text-muted mb-1">Course / Year</div>
                                <div class="font-medium">{{ $student->course }} · Year {{ $student->year_level }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider my-6"></div>

                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 text-sm text-gray-500">
                    <div>Created at: {{ $student->created_at->toDayDateTimeString() }}</div>
                    <div>Last updated: {{ $student->updated_at->diffForHumans() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
