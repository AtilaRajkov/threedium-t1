@if(session()->has('message-type'))
<div class="alert alert-{{ session()->get('message-type') }}" role="alert" id="flash_message">
     {{ session()->get('message-text') }}
   </div>
@endif