@section('navbar')
@parent

{{-- @if (isset($config))
    <nav class="navbar {{ $configs->get()->first()->theme_hex == '#000000' ? 'is-dark' : 'is-light' }}">
@else
    <nav class="navbar is-light">
@endif --}}
<nav class="navbar is-dark is-fixed-top">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <img src="https://lumarbros.com/lmb19/wp-content/uploads/2019/04/libesoft.io-logo-2019-sm3.png" alt="Libesoft">
            <label class="libesoft">libesoft.io</label>
        </a>
        <div class="navbar-burger burger" data-target="navMenubd-example">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div id="navMenubd-example" class="navbar-menu">
        <div class="navbar-start">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link  is-active" href="/projects">
                    Projects
                </a>
                <div class="navbar-dropdown ">
                    <a class="navbar-item " href="/projects/create">
                        New Project
                    </a>
                    <a class="navbar-item " href="/projects">
                        List Projects
                    </a>
                    <hr class="navbar-divider">
                    <div class="navbar-item">
                        <div>
                            <p class="is-size-6-desktop">
                                <strong class="has-text-info">v.1.0</strong>
                            </p>
                            <small>
                                <a class="bd-view-all-versions" href="/about">View all versions</a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-item has-dropdown is-hoverable">
                <div class="navbar-link">Options</div>
                <div id="moreDropdown" class="navbar-dropdown ">
                    <a class="navbar-item " href="/projects">
                        <div class="level is-mobile">
                            <div class="level-left">
                                <div class="level-item">
                                    <p>
                                        <strong>Manage Extensions</strong>
                                        <br>
                                        <small>Side projects to enhance Libesoft</small>
                                    </p>
                                </div>
                            </div>
                            <div class="level-right">
                                <div class="level-item">
                                    <span class="icon has-text-info">
                                        <i class="fa fa-plug"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="navbar-item " href="/configs">
                        <div class="level is-mobile">
                            <div class="level-left">
                                <div class="level-item">
                                    <p>
                                        <strong>Configuration</strong>
                                    </p>
                                </div>
                            </div>
                            <div class="level-right">
                                <div class="level-item">
                                    <span class="icon has-text-info">
                                        <i class="fa fa-plug"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all "navbar-burger" elements
        var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
        // Check if there are any nav burgers
        if ($navbarBurgers.length > 0) {
            // Add a click event on each of them
            $navbarBurgers.forEach(function($el) {
                $el.addEventListener('click', function() {
                    // Get the target from the "data-target" attribute
                    var target = $el.dataset.target;
                    var $target = document.getElementById(target);
                    // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                    $el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');
                });
            });
        }
    });
</script>
@endsection