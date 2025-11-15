<x-layouts.admin-layout title="Create Student • SRS">
  <div class="mx-auto max-w-2xl">
    <h2 class="mb-4 text-xl font-semibold">Create
      Student
    </h2>
    @if ($errors->any())
      <div class="alert alert-error mb-4">
        <ul class="list-disc pl-5">
          @foreach ($errors->all() as $err)
            <li>
              {{ $err }}
            </li>
          @endforeach
        </ul>
      </div>
    @endif
    <form
      action="{{ route('admin.students.store') }}"
      method="POST"
    >
      @csrf
      <div class="grid grid-cols-1 gap-3">
        <x-forms.text-input
          label="Full name"
          name="full_name"
          :value="old('full_name')"
          required
        />
        <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
          <x-forms.text-input
            label="Date of birth"
            name="date_of_birth"
            type="date"
            :value="old('date_of_birth')"
            required
          />
          <x-forms.text-input
            label="Gender"
            name="gender"
            type="select"
            :options="[
                'male' => 'Male',
                'female' => 'Female',
            ]"
            :value="old('gender')"
            placeholder="Select Gender"
            required
          />
        </div>
        <x-forms.text-input
          label="Email"
          type="email"
          name="email"
          :value="old('email')"
          required
        />
        <x-forms.text-input
          label="Course / Program"
          name="course"
          :value="old('course')"
          required
        />
        <x-forms.text-input
          label="Year Level"
          name="year_level"
          :value="old('year_level')"
          required
        />
      </div>

      <div class="pt-2">
        <button class="btn btn-primary">Create
          Student</button>
        <a
          href="{{ route('admin.students.index') }}"
          class="btn btn-ghost ml-2"
        >Cancel</a>
      </div>
    </form>
  </div>
</x-layouts.admin-layout>
