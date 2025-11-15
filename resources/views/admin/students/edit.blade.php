<x-layouts.admin-layout title="Edit Student • SRS">
  <div class="mx-auto max-w-2xl">
    <h2 class="mb-4 text-xl font-semibold">Edit Student</h2>
    @if ($errors->any())
      <div class="alert alert-error mb-4">
        <ul class="list-disc pl-5">
          @foreach ($errors->all() as $err)
            <li>{{ $err }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form
      action="{{ route('admin.students.update', $student) }}"
      method="POST"
    >
      @csrf
      @method('PUT')
      <div class="grid grid-cols-1 gap-4">
        <x-forms.text-input
          label="Full name"
          name="full_name"
          value="{{ $student->full_name }}"
        />
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
          <x-forms.text-input
            label="Date of birth"
            name="date_of_birth"
            type="date"
            value="{{ $student->date_of_birth->format('Y-m-d') }}"
          />
          <div>
            <label class="label"><span class="label-text">Gender</span></label>
            <select
              name="gender"
              class="select select-bordered w-full"
            >
              <option value="">Select</option>
              <option
                value="male"
                {{ old('gender', $student->gender) == 'male' ? 'selected' : '' }}
              >
                Male</option>
              <option
                value="female"
                {{ old('gender', $student->gender) == 'female' ? 'selected' : '' }}
              >
                Female</option>
              <option
                value="other"
                {{ old('gender', $student->gender) == 'other' ? 'selected' : '' }}
              >
                Other</option>
            </select>
          </div>
        </div>
        <x-forms.text-input
          label="Email"
          name="email"
          type="email"
          value="{{ $student->email }}"
        />
        <x-forms.text-input
          label="Course / Program"
          name="course"
          value="{{ $student->course }}"
        />
        <x-forms.text-input
          label="Year Level"
          name="year_level"
          value="{{ $student->year_level }}"
        />
        <div class="pt-3">
          <button class="btn btn-primary">Save changes</button>
          <a
            href="{{ route('admin.students.index') }}"
            class="btn btn-ghost ml-2"
          >Cancel</a>
        </div>
      </div>
    </form>
  </div>
</x-layouts.admin-layout>
