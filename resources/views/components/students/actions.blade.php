<div class="dropdown dropdown-end">
  <label
    tabindex="0"
    class="btn btn-ghost btn-sm rounded-full"
    aria-haspopup="true"
    aria-expanded="false"
    aria-label="Open actions"
  >
    <svg
      xmlns="http://www.w3.org/2000/svg"
      class="h-5 w-5"
      fill="none"
      viewBox="0 0 24 24"
      stroke="currentColor"
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="M6 12h.01M12 12h.01M18 12h.01"
      />
    </svg>
  </label>
  <ul
    tabindex="0"
    class="dropdown-content menu bg-base-100 rounded-box w-40 p-2 shadow"
  >
    <li>
      <a
        href="{{ route('admin.students.show', $student) }}"
        class="flex items-center gap-2"
      >View</a>
    </li>
    <li>
      <a
        href="{{ route('admin.students.edit', $student) }}"
        class="flex items-center gap-2"
      >Edit</a>
    </li>
    <li>
      <a
        href="#"
        class="js-delete-student"
        data-student-id="{{ $student->id }}"
      >Delete</a>
      <form
        id="delete-student-{{ $student->id }}"
        action="{{ route('admin.students.destroy', $student) }}"
        method="POST"
        style="display:none;"
      >
        @csrf
        @method('DELETE')
      </form>
    </li>
  </ul>
</div>
