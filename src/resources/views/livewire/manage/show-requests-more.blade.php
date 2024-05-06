<div x-data="show_requests_more">
    <div id="show-requests-more-modal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 x-text="'Запрос киента: ' + $wire.request?.client?.full_name + ' от ' + $wire.request.created_at" class="modal-title"></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
              <template x-for="item in request">
                <div class="card">
                    <div x-text="item.head" class="card-header">
                    </div>
                    <div class="card-body">
                        <p x-text="$wire.request[item.key] ?? 'Клиент не оставил ' + getLowerHead(item.head)"></p>
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

        $(document).on('alpine:init', () => {
          Alpine.data('show_requests_more', () => ({
            'request': [
              {'head': 'Запрос', 'key': 'request'}, 
              {'head': 'Комментарий', 'key': 'comment'}, 
              {'head': 'Пожелания', 'key': 'wish'}
            ],
            getLowerHead(head) {
              return head.charAt(0).toLowerCase() + head.slice(1);
            }
          }));
        });
    </script>
      @endpush
</div>
