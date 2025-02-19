<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
  <li class="nav-item">
      <a href="{{ route('home') }}" class="nav-link {{ setMenuClass('home', 'active') }}">
        <i class="nav-icon fas fa-home"></i>
        <p>
          Accueil
        </p>
      </a>
    </li>

  @can("manager")
  <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Tableau de bord
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-chart-line"></i>
            <p>Vue globale</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-swatchbook"></i>
            <p>Locations</p>
          </a>
        </li>
      </ul>
  </li>
  @endcan

  @can("admin")
  <li class="nav-item {{ setMenuClass('admin.habilitations.', 'menu-open') }}">
      <a href="#" class="nav-link {{ setMenuClass('admin.habilitations.', 'active') }}">
        <i class=" nav-icon fas fa-user-shield"></i>
        <p>
          Habilitations
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item ">
          <a
          href="{{ route('admin.habilitations.users.index') }}"
          class="nav-link {{ setMenuClass('admin.habilitations.users.index', 'active') }}"
          >
            <i class=" nav-icon fas fa-users-cog"></i>
            <p>Utilisateurs</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-fingerprint"></i>
            <p>Roles et permissions</p>
          </a>
        </li>
      </ul>
  </li>

  <li class="nav-item {{-- setMenuClass('admin.gestarticles.', 'menu-open') --}}">
      <a href="#" class="nav-link {{-- setMenuClass('admin.gestarticles.', 'active') --}}">
          <i class="nav-icon fas fa-cogs"></i>
          <p>
          identité des mutuelles
          <i class="right fas fa-angle-left"></i>
          </p>
      </a>
      <ul class="nav nav-treeview">
          <li class="nav-item">
              <a href="{{-- route('admin.gestarticles.types') --}}"
                  class="nav-link {{-- setMenuClass('admin.gestarticles.types', 'active') --}}">
              <i class="nav-icon far fa-circle"></i>
              <p>Type de mutuelles</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="{{-- route('admin.gestarticles.articles') --}}"
                  class="nav-link {{-- setMenuClass('admin.gestarticles.articles', 'active') --}}">
              <i class="nav-icon fas fa-list-ul"></i>
              <p>Mutuelles</p>
              </a>
          </li>
          
      </ul>
  </li>
  @endcan

  @can("employe")
  <li class="nav-header">GESTION DES MUTUELLES</li>
  <li class="nav-item">
      <a href="{{-- route('employe.clients.index') --}}" class="nav-link ">
          <i class="nav-icon fas fa-users"></i>
          <p>
          Bénéficiaires
          </p>
      </a>
  </li>
  <li class="nav-item">
      <a href="#" class="nav-link">
          <i class="nav-icon fas fa-exchange-alt"></i>
          <p>
          Cotisations
          </p>
      </a>
  </li>
  <li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-exchange-alt"></i>
        <p>
        Dépenses
        </p>
    </a>
</li>
  @endcan

  </ul>
</nav>