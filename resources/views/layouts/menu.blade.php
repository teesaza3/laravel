


<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
        <a class="navbar-brand" style="padding-left: 1rem;" href="{{ url('/home/') }}">Home</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="active ">
                    <div class="dropdown">
                        <button class="btn  dropdown-toggle " style="color: white;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ url('images/food.png') }}" width="25" height="25" class="d-inline-block align-top" alt="">
                            Restaurant
                        </button>
                        <div class="dropdown-menu dark-text" aria-labelledby="dropdownMenuButton">
                        
                            <a class="dropdown-item" href="{{ url('/pop/') }}">Pop Steakhouse</a>
                            <a class="dropdown-item" href="{{ url('/gorilla/') }}">Gorilla Grill</a>
                            <a class="dropdown-item" href="{{ url('/shinkanzen/') }}">Shinkansen sushi</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>


    </nav>

    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="/docs/4.4/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Bootstrap
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Restaurant
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
    </ul>
  </div>
</nav> -->

    

