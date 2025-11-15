<form
  method="POST"
  action="{{ route('logout') }}"
>
  @csrf
  <button
    type="submit"
    class="rounded-4xl cursor-pointer border-2 px-4 py-2 hover:bg-black hover:text-white"
  >
    Logout
  </button>
</form>
