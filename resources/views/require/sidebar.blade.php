<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="dashboard">
          <i class="bi bi-grid"></i>
          <span>MENU</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Gestion Docteurs</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('docteurs.index')}}">
              <i class="bi bi-circle"></i><span>Liste Docteurs</span>
            </a>
          </li>
          <li>
            <a href="{{route('docteurs.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Docteur</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Gestion Patients</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('patients.index')}}">
              <i class="bi bi-circle"></i><span>Liste Patients</span>
            </a>
          </li>
          <li>
            <a href="{{route('patients.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Patient</span>
            </a>
          </li>

        </ul>
    </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nave" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Gestion Services</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nave" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('services.index')}}">
              <i class="bi bi-circle"></i><span>Liste Services</span>
            </a>
          </li>
          <li>
            <a href="{{route('services.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Service</span>
            </a>
          </li>
          <li>
          </li>
        </ul>
      </li><!-- End Icons Nave -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav_1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Gestion Specialités</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav_1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('specialites.index')}}">
              <i class="bi bi-circle"></i><span>Liste Specialités</span>
            </a>
          </li>
          <li>
            <a href="{{route('specialites.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Specialité</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav_1 -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav_2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Gestion Rendez-vous</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav_2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('rendezvous.index')}}">
              <i class="bi bi-circle"></i><span>Liste Rendez-vous</span>
            </a>
          </li>
          <li>
            <a href="{{route('rendezvous.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Rendez-vous</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav_2 -->

    </ul>

  </aside>
