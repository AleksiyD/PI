@if(session($key))
    <div class="notification-wrapper">
      <div class="alert alert-{{$key}}">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          {{ session($key) }}
      </div>
    </div>
@endif