
<div class="d-flex flex-row justify-content-center no-wrap">
  <div class="ml-auto">
    {{ $data->links() }}
  </div>
  <div class="ml-auto">
    С {{ $data->firstItem() }} по {{ $data->lastItem() }} из {{ $data->total() }} 
  </div>
</div>
