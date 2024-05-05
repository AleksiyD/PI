
<div class="mt-1 col-md-4 col-lg-2">
  <select wire:model="perPage"
      class="custom-select custom-select-sm form-control form-control-sm"
      wire:loading.attr="disabled">
      @foreach ($itemsPage as $item)
      <option value="{{ $item }}">{{ $item }}</option>
      @endforeach
  </select>
</div>
