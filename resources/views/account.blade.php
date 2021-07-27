<h2>Hi, {{ Auth::user()->name }}</h2>
<br>

@if(Auth::user()->avatar)
<img src="{{ Auth::user()->avatar }}" style="width:230px;">
@endif

<br>
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>