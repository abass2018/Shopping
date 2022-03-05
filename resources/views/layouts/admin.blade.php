
   @include('layouts.inc.header')

    @include('layouts.inc.sidebar')
    @include('layouts.inc.adminnav')
    <div class="content-wrapper" style="min-height: 99px;">
      <div class="content">
      @yield('content')
      </div>
    </div>
    @include('layouts.inc.adminfooter')
@include('layouts.inc.footer')
