<x-layouts.admin-layout title="Students • SRS">
  
  <!-- Top bar: Create + Search -->
  <div class="mb-4 flex w-full flex-col items-start gap-2 sm:flex-row sm:items-center">
    <a href="{{ route('admin.students.create') }}" class="btn btn-primary w-full sm:w-auto">
      + New Student
    </a>

    <x-students.search-form 
      :q="$q" 
      :field="$field" 
      class="w-full sm:w-auto" 
    />
  </div>

  <!-- Student Table -->
  <x-students.table 
    :headers="[
      ['label' => 'Student ID'],
      ['label' => 'Name', 'class' => 'max-sm:hidden'],
      ['label' => 'Email', 'class' => 'max-md:hidden'],
      ['label' => 'Course', 'class' => 'max-lg:hidden'],
      ['label' => 'Year', 'class' => 'max-lg:hidden'],
      ['label' => 'Actions', 'class' => 'text-right'],
    ]">

    @forelse ($students as $student)
      <x-students.row :student="$student" />
    @empty
      <x-students.empty-row />
    @endforelse

  </x-students.table>

  <!-- Pagination -->
  <div class="p-4">
    {{ $students->onEachSide(0)->links() }}
  </div>

  @push('scripts')
    <script src="{{ asset('js/admin-students.js') }}"></script>
  @endpush

</x-layouts.admin-layout>
