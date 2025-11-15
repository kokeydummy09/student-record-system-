<form
  method="GET"
  action="{{ route('admin.students.index') }}"
  class="flex w-full flex-1 flex-col items-center gap-2 sm:flex-row"
>
  <div class="max-sm:w-full">
    <select
      name="field"
      class="select select-bordered w-full text-center"
    >
      <option value="">All fields</option>
      <option
        value="studId"
        {{ (isset($field) ? $field : request('field')) == 'studId' ? 'selected' : '' }}
      >
        Student Id
      </option>
      <option
        value="name"
        {{ (isset($field) ? $field : request('field')) == 'name' ? 'selected' : '' }}
      >Name
      </option>
      <option
        value="email"
        {{ (isset($field) ? $field : request('field')) == 'email' ? 'selected' : '' }}
      >Email
      </option>
      <option
        value="course"
        {{ (isset($field) ? $field : request('field')) == 'course' ? 'selected' : '' }}
      >
        Course
      </option>
      <option
        value="year"
        {{ (isset($field) ? $field : request('field')) == 'year' ? 'selected' : '' }}
      >Year
      </option>
    </select>
  </div>

  <div class="flex w-full flex-1 items-center gap-2">
    <input
      type="search"
      name="q"
      value="{{ old('q', $q ?? request('q')) }}"
      placeholder="Search students..."
      class="input input-bordered flex-1"
    />
    <div class="flex items-center gap-2">
      <button
        type="submit"
        class="btn btn-primary"
      >Search</button>
      @if (request()->has('q') || request()->has('field'))
        <a
          href="{{ route('admin.students.index') }}"
          class="btn btn-ghost border-red-300"
        >Clear</a>
      @endif
    </div>
  </div>

</form>
