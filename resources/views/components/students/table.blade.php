@props(['headers'])

<div class="bg-base-100 rounded-lg p-4 shadow-sm">
  <table class="table-zebra table w-full min-w-max">
    <thead>
      <tr>
        @foreach ($headers as $header)
          <th class="{{ $header['class'] ?? '' }}">{{ $header['label'] }}</th>
        @endforeach
      </tr>
    </thead>

    <tbody>
      {{ $slot }}
    </tbody>
  </table>
</div>
