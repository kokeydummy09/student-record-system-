<form method="GET" action="{{ route('admin.students.index') }}" class="flex gap-2 items-center flex-1">
    <div>
        <select name="field" class="select select-bordered">
            <option value="">All fields</option>
            <option value="studId" {{ (isset($field) ? $field : request('field')) == 'studId' ? 'selected' : '' }}>
                Student Id
            </option>
            <option value="name" {{ (isset($field) ? $field : request('field')) == 'name' ? 'selected' : '' }}>Name
            </option>
            <option value="email" {{ (isset($field) ? $field : request('field')) == 'email' ? 'selected' : '' }}>Email
            </option>
            <option value="course" {{ (isset($field) ? $field : request('field')) == 'course' ? 'selected' : '' }}>Course
            </option>
            <option value="year" {{ (isset($field) ? $field : request('field')) == 'year' ? 'selected' : '' }}>Year
            </option>
        </select>
    </div>

    <div class="flex-1">
        <input type="search" name="q" value="{{ old('q', $q ?? request('q')) }}" placeholder="Search students..."
            class="input input-bordered w-full" />
    </div>

    <div class="flex items-center gap-2">
        <button type="submit" class="btn btn-primary">Search</button>
        @if (request()->has('q') || request()->has('field'))
            <a href="{{ route('admin.students.index') }}" class="btn btn-ghost border-red-300">Clear</a>
        @endif
    </div>
</form>
