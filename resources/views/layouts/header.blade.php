<script>
    function toggleSearch(){
        let element = document.getElementById('searchToggle');
        element.classList.toggle('d-none');
    }
</script>
<h2 class="text-center py-5" style="color: #EB661F;font-style: italic;font-weight: bold;font-size: 48px;">DEFAR Sci</h2>

<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
  <a class="navbar-brand" href="#"><img src="{{ asset('images/img_1 1.png') }}" style="width:43px; height:52px;margin-top:-35px; margin-left:20px;" /></a>  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav m-auto mb-2 mb-lg-0 mt-3">
        <li class="nav-item">
          <a class="nav-link active"  style="font-size: 22px;" aria-current="page" href="{{url('/')}}">Accueil</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" style="font-size: 22px;" href="{{route('apropos')}}">A propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-size: 22px;" href="{{route('departement')}}">Departements</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-size: 22px;" href="{{route('blog')}}">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-size: 22px;" href="{{route('contribuez')}}">Contribuez</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-size: 22px;" href="{{route('contact')}}">Contact</a>
        </li>
        <li class="nav-item">
          <form action="{{route('search')}}" method="post" >
            @csrf
            <div class="input-group rounded" id="menu">
            <input type="search" class="form-control rounded d-none" name="search" id="searchToggle" placeholder="Search" aria-label="Search"
              aria-describedby="search-addon" />
          </div>
          </form>
        </li>
        <button type="submit" style="border:none; background:none;margin-top:-32px" onclick="toggleSearch()" class=" nav-link"><i class="fa fa-search" aria-hidden="true"></i></button>

       
      </ul>
      <form class="d-flex">
          <button style=" color:#464646; border:none; background-color:transparent"> <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></button>
          <button style=" color:#464646; border:none; background-color:transparent"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></button>
          <button style=" color:#464646; border:none; background-color:transparent"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></button>
      </form>
    </div>
    
       
       
  </div>
</nav>