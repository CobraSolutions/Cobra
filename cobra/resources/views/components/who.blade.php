@if(Auth::guard('web')->check())
   <p class="text-success">
      Ingelogd als <strong>USER</strong>
   </p>
@else
   <p class="text-danger">
      Uitgelogd als <strong>USER</strong>
   </p>
@endif

<!--voor admin -->
@if(Auth::guard('admin')->check())
   <p class="text-success">
      Ingelogd als <strong>ADMIN</strong>
   </p>
@else
   <p class="text-danger">
      Uitgelogd als <strong>ADMIN</strong>
   </p>
@endif
