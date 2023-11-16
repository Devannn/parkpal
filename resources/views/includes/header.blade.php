<div class="col justify-content-center">
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-top">
        <a href="/"><img src={{asset('img/logo-small.png')}} width="50" height="50" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ms-5" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/map">Plattegrond</a>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <form class="form-inline my-2 my-lg-0" action="/map">
                <button class="btn btn-secondary" type="submit">Nederlands</button>
                <button class="btn btn-primary" type="submit">Plattegrond</button>
            </form>
        </div>
    </nav>
</div>