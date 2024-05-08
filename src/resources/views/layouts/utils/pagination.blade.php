
<div class="d-flex flex-row justify-content-center no-wrap">
  <div>
    {{ $data->links() }}
  </div>
  <div class="ms-auto">
    С {{ $data->firstItem() }} по {{ $data->lastItem() }} из {{ $data->total() }} 
  </div>
</div>

<style>
  .page-link.active, .active > .page-link {
    color: black;
    background-color: var(--bs-warning);
    border-color: var(--bs-warning);
  }
</style>
