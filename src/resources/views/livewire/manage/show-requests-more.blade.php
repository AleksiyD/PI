<div x-data ="{
    request: [
        {'head': 'Запрос', 'key': 'request'}, 
        {'head': 'Комментарий', 'key': 'comment'}, 
        {'head': 'Пожелания', 'key': 'wish'}
    ]
}">
    <div id="show-requests-more-modal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 x-text="$wire.client.full_name" class="modal-title"></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
              <template x-for="item in request">
                <div class="card">
                    <div x-text="item.head" class="card-header">
                    </div>
                    <div class="card-body">
                        <p x-text="$wire.request[item.key]"></p>
                    </div>
                  </div>
              </template>

            </div>
          </div>
        </div>
      </div>
      @push('child-script')
      <script>
        var modal = $('#show-requests-more-modal');
        $(window).on('show-request-modal', event => {
            modal.modal('show');
        });
    </script>
      @endpush
</div>
