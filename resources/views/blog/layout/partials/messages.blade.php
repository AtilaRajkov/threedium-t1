@if(session()->has('message-type'))
   <div class="alert alert-{{ session()->get('message-type') }}" role="alert">
     {{ session()->get('message-text') }}
   </div>
@endif