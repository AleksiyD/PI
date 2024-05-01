<div class="modal fade" id="modal-{{ $id }}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{{ $title }}</h4>
        <p>{{ $desc ?? '' }}</p>
      </div>
      <div class="modal-body">
        {{ $slot }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        <input class="btn btn-primary" type="submit" form="{{ $id }}" value="{{ $send_btn_text ?? 'Отправить' }}">
      </div>
    </div>
  </div>
</div>
@if($errors->isNotEmpty())
  @push('script')
    <script>
      $('#modal-{{ $id }}').modal('show');
    </script>
  @endpush
@endif