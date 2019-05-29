@if(count($errors) > 0)
  <div class="alert alert-danger">
    <ur>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ur>
  </div>
@endif
