<div class="sidebar">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
  -->
    <div class="sidebar-wrapper">
      <div class="logo">
        <a href="javascript:void(0)" class="simple-text logo-mini">
          CT
        </a>
        <a href="javascript:void(0)" class="simple-text logo-normal">
          SEN FORAGE
        </a>
      </div>
      <ul class="nav">
        <li class="active ">
          <a href="./test1">
            <i class="tim-icons icon-chart-pie-36"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li>
          <a href="./icons.html">
            <i class="tim-icons icon-atom"></i>
            <p>Gestion Utilisateurs</p>
          </a>
        </li>
        @roles('Gestionnaire')
        <li>
          <a href="{{route('villages.index')}}">
            <i class="tim-icons icon-pin"></i>
            <p>Gestion Villages</p>
          </a>
        </li>
        <li>
          <a href="{{route('clients.index')}}">
            <i class="tim-icons icon-bell-55"></i>
            <p>Gestion Clients</p>
          </a>
        </li>
        <li>
          <a href="{{route('compteurs.index')}}">
            <i class="tim-icons icon-single-02"></i>
            <p>Gestion Compteurs</p>
          </a>
        </li>
        <li>
          <a href="{{route('abonnements.index')}}">
            <i class="tim-icons icon-puzzle-10"></i>
            <p>Gestion Abonnements</p>
          </a>
        </li>
        @endroles
        <li>
          <a href="./typography.html">
            <i class="tim-icons icon-align-center"></i>
            <p>Gestion Utilisateurs</p>
          </a>
         </li>
         <li>
          <a href="{{route('factures.index')}}">
            <i class="tim-icons icon-world"></i>
            <p>Gestion Factures</p>
          </a>
        </li>
       {{-- <li class="active-pro">
          <a href="./upgrade.html">
            <i class="tim-icons icon-spaceship"></i>
            <p>Upgrade to PRO</p> 
          </a>
        </li> --}}
      </ul>
    </div>
  </div>