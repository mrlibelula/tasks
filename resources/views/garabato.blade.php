<div class="navbar-item has-dropdown is-hoverable">
    <a class="navbar-link  is-active" href="/projects">
        Projects
    </a>
    <div class="navbar-dropdown ">
        <a class="navbar-item " href="/projects/create">
            New Project
        </a>







<div class="navbar-item has-dropdown is-hoverable">
    <a class="navbar-link" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        {{ Auth::user()->name }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div> 