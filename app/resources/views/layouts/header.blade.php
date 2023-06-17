{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <div class="logo">
            <span class="flaticon-solidarity"></span>
            <h1 class="navbar-brand">ShareHope</h1>
        </div>
        <div class="navbar" id="navbarNav">
        <div class="row">
          <ul class="navbar1">
            <li class="nav-item">
              <a class="nav-link" href="/">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('donations.index')}}">Donations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/urgences">Cas d'urgences</a>
            </li>
          </ul>

            <div class="row2">
            <select name="langue" id="langue">
              <option value="fr">Fr</option>
              <option value="en">Ang</option>
              <option value="ar">Ar</option>
            </select>
            </div>
          <hr class="separer">

          <ul class="navbar2">
            <li class="nav-item">
              <a class="nav-link" href="{{route('temoignages.index')}}">{{__("Témoignages")}}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('evenements.index')}}">Evenements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">{{__("A propos de nous")}}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="donate" href="{{route('donations.index')}}">Donate</a>
            </li>
          </ul>
        </div>
</div>
</div>
</nav> --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <div class="logo">
      <span class="flaticon-solidarity"></span>
      <h1 class="navbar-brand">ShareHope</h1>
    </div>
    <div class="navbar" id="navbarNav">
      <div class="row">
        <ul class="navbar1">
          <li class="nav-item">
            <a class="nav-link" href="/">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="donations-link" href="{{route('donations.index')}}">Donations</a>
            <ul id="donations-menu" class="submenu">
              <li class="nav-item">
                <a class="nav-link" href="/urgences">Cas d'urgences</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/services">{{__("Services")}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('temoignages.index')}}">{{__("Témoignages")}}</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{route('evenements.index')}}">Evenements</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">{{__("À propos de nous")}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">{{__("Contact")}}</a>
          </li>

        </ul>
        <div class="row2">
          <select name="langue" id="langue">
            <option value="fr">Fr</option>
            <option value="en">Ang</option>
            <option value="ar">Ar</option>
          </select>
        </div>
      </div>
    </div>
  </div>
</nav>

<ul class="navbar-nav fixed-bottom">
  <li class="nav-item">
    <a class="nav-link" href="/login">{{__("login")}}</a>
  </li>
</ul>

  <style>

  .submenu {
    display: none;
    position: absolute;
    background-color: #fff;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  }
  .navbar1 li:hover > .submenu {
    display: block;
  }

.flaticon-solidarity {
  background-image: url('pics/solidarite.png');
  background-size: contain;
  width: 4em;
  height: 4em;
  display: inline-block;
  vertical-align: middle;
  margin-left:80px;
}
.logo h1{
  color:gray;
  margin-top:-16.5px;
  margin-left:55px;
  font-family:"Comic Sans MS";
}
/* Style pour la première ligne */
.navbar1 {
  display: flex;
  flex-wrap:wrap;
  gap:120px;
  align-items: center;
  margin-left:250px;
  list-style:none;
  margin-top:48px;

}


.navbar1 li a{
  text-decoration:none;
  font-size:20px;
  color:gray;
}

.row{
  margin-top:-135px;
  padding:20px;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
  top:-60px;
  padding-top:40px;

}
.logo span{
  margin-top:18px;
}

.row2 {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  margin-left: 20px;
  margin-top:-40px;
  margin-bottom:10px;

}
.row2 select{
  border:solid 1px red;
  padding:5px 15px;
 
}

/* Style pour les boutons Contact et Login */
.navbar-nav.fixed-bottom {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  padding: 10px;
}

.navbar-nav.fixed-bottom li {
  margin-left: 10px;
}

.navbar-nav.fixed-bottom a {
  display: inline-block;
  background-color:gray;
  color: #fff;
  padding: 10px 35px;
  border-radius: 5px;
  text-decoration: none;
  transition: all 0.3s ease;
  margin-top:-10px;

}

.navbar-nav.fixed-bottom a:hover {
  background-color: #0056b3;
}

@media (max-width: 767px) {
  .navbar-nav.fixed-bottom {
    justify-content: center;
  }
}
ul {
  list-style-type: none;
}

</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('.navbar1 li').hover(
      function() {
        $(this).children('.submenu').addClass('show');
      },
      function() {
        $(this).children('.submenu').removeClass('show');
      }
    );
  });
</script>








  