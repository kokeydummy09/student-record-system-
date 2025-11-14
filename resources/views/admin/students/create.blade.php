<x-layouts.admin-layout title="Create Student • SRS">
    <div class="max-w-2xl mx-auto">
        <h2 class="text-xl font-semibold mb-4">Create Student</h2>

        @if ($errors->any())
            <div class="alert alert-error mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.students.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 gap-3">
                <div>
                    <label class="label"><span class="label-text">Full name</span></label>
                    <input type="text" name="full_name" value="{{ old('full_name') }}"
                        class="input input-bordered w-full" required />
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="label"><span class="label-text">Date of birth</span></label>
                        <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}"
                            class="input input-bordered w-full" required />
                    </div>
                    <div>
                        <label class="label"><span class="label-text">Gender</span></label>
                        <select name="gender" class="select select-bordered w-full">
                            <option value="">Select</option>
                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="label"><span class="label-text">Email</span></label>
                    <input type="email" name="email" value="{{ old('email') }}" class="input input-bordered w-full"
                        required />
                </div>

                <div>
                    <label class="label"><span class="label-text">Course / Program</span></label>
                    <input type="text" name="course" value="{{ old('course') }}" class="input input-bordered w-full"
                        required />
                </div>

                <div>
                    <label class="label"><span class="label-text">Year Level</span></label>
                    <input type="text" name="year_level" value="{{ old('year_level') }}"
                        class="input input-bordered w-full" required />
                </div>
            </div>

            <div class="pt-2">
                <button class="btn btn-primary">Create Student</button>
                <a href="{{ route('admin.students.index') }}" class="btn btn-ghost ml-2">Cancel</a>
            </div>
        </form>
    </div>
</x-layouts.admin-layout>
