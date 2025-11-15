@props(['student'])

<tr>
  <td>{{ $student->student_id }}</td>
  <td class="max-sm:hidden">{{ $student->full_name }}</td>
  <td class="max-md:hidden">{{ $student->email }}</td>
  <td class="max-lg:hidden">{{ $student->course }}</td>
  <td class="max-lg:hidden">{{ $student->year_level }}</td>
  <td class="text-right">
    <x-students.actions :student="$student" />
  </td>
</tr>
