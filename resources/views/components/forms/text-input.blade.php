@props([
    'label' => '',
    'name',
    'type' => 'text',
    'value' => '',
    'required' => false,
    'options' => [], // for select
    'placeholder' => '',
])

<div>
  @if ($label)
    <label class="label"><span class="label-text">{{ $label }}</span></label>
  @endif

  @if ($type === 'select')
    <select
      name="{{ $name }}"
      {{ $required ? 'required' : '' }}
      {{ $attributes->merge(['class' => 'select select-bordered w-full']) }}
    >
      <option value="">{{ $placeholder ?: 'Select' }}</option>
      @foreach ($options as $optValue => $optLabel)
        <option
          value="{{ $optValue }}"
          {{ $optValue == $value ? 'selected' : '' }}
        >{{ $optLabel }}
        </option>
      @endforeach
    </select>
  @else
    <input
      type="{{ $type }}"
      name="{{ $name }}"
      value="{{ old($name, $value) }}"
      placeholder="{{ $placeholder }}"
      {{ $required ? 'required' : '' }}
      {{ $attributes->merge(['class' => 'input input-bordered w-full']) }}
    />
  @endif

  @error($name)
    <span class="text-error mt-1 block text-sm">{{ $message }}</span>
  @enderror
</div>
