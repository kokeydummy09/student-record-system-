div<x-layouts.admin-layout title="Student Profile • SRS">
  <div class="mx-auto max-w-4xl">
    <div class="card bg-base-100 overflow-hidden shadow-lg">
      <div class="card-body p-6 md:p-8">
        <div class="flex flex-col items-center gap-6 md:flex-row md:items-start">
          <div class="avatar">
            <div class="ring-primary ring-offset-base-100 h-28 w-28 overflow-hidden rounded-full ring ring-offset-2">
              <img
                src="https://i.pravatar.cc/300?u={{ $student->id }}"
                alt="avatar"
                class="h-full w-full object-cover"
              />
            </div>
          </div>

          <div class="w-full flex-1">
            <div class="flex items-start justify-between">
              <div>
                <h1 class="text-2xl font-bold md:text-3xl">{{ $student->full_name }}</h1>
                <div class="mt-2 flex items-center gap-2">
                  <span class="badge badge-outline">{{ $student->student_id ?? '—' }}</span>
                  <span class="text-xs text-gray-500">Student ID</span>
                </div>
              </div>

              <div class="flex gap-2">
                <a
                  href="{{ route('admin.students.edit', $student) }}"
                  class="btn btn-primary btn-sm"
                >Edit</a>
                <a
                  href="{{ route('admin.students.index') }}"
                  class="btn btn-ghost btn-sm"
                >Back</a>
              </div>
            </div>

            <div class="mt-6 grid grid-cols-1 gap-4 text-sm sm:grid-cols-2">
              <div class="bg-base-200 rounded-lg p-4">
                <div class="text-muted mb-1 text-xs">Email</div>
                <div class="wrap-break-word font-medium">{{ $student->email }}</div>
              </div>

              <div class="bg-base-200 rounded-lg p-4">
                <div class="text-muted mb-1 text-xs">Date of birth</div>
                <div class="font-medium">{{ $student->date_of_birth->toFormattedDateString() }}</div>
              </div>

              <div class="bg-base-200 rounded-lg p-4">
                <div class="text-muted mb-1 text-xs">Gender</div>
                <div class="font-medium">{{ $student->gender ?? '—' }}</div>
              </div>

              <div class="bg-base-200 rounded-lg p-4">
                <div class="text-muted mb-1 text-xs">Course / Year</div>
                <div class="font-medium">{{ $student->course }} · Year {{ $student->year_level }}</div>
              </div>
            </div>
          </div>
        </div>

        <div class="divider my-6"></div>

        <div class="flex flex-col gap-4 text-sm text-gray-500 md:flex-row md:items-center md:justify-between">
          <div>Created at: {{ $student->created_at->toDayDateTimeString() }}</div>
          <div>Last updated: {{ $student->updated_at->diffForHumans() }}</div>
        </div>
      </div>
    </div>
  </div>
</x-layouts.admin-layout>
