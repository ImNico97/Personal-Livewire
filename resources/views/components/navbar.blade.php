<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="row justify-content-between ">
            <div class="col-10 col-md-11">
                <a class="navbar-brand" href="{{ route('homePage') }}">Impresa Edile</a>
            </div>
            <div class="col-2 col-md-11">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <div class="row" id="navbarSupportedContent">
            <div class="col-12 col-md-12">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center">
                    <li class="nav-item pe-4">
                        <a class="nav-link " aria-current="page" href="{{ route('homePage') }}">HOME</a>
                    </li>
                    <li class="nav-item pe-4">
                        <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item pe-4">
                        <a class="nav-link" href="#">SERVIZI</a>
                    </li>
                    <li class="nav-item pe-4">
                        <a class="nav-link" href="#">PORTFOLIO</a>
                    </li>
                    <li class="nav-item pe-4">
                        <a href="{{ route('contactPage') }}"><button class="button-84" role="button">CONTATTACI</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
