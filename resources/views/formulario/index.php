<head>
  <title>Cadastro de Pessoa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
<link rel="stylesheet" href="../assets/libs/simplebar/dist/simplebar.css" /> <!-- se usar simplebar -->
<link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <aside class="left-sidebar" style="background-color: var(--bs-secondary-bg-subtle);">
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href=".//" class="text-nowrap logo-img">
            <img src="../assets/images/logos/dark-logo.svg" width="180" alt="Logo" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>

        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="/" aria-expanded="false">
                <span><i class="ti ti-layout-dashboard"></i></span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">UI COMPONENTS</span>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="/buttons" aria-expanded="false">
                <span><i class="ti ti-article"></i></span>
                <span class="hide-menu">Buttons</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="/alert" aria-expanded="false">
                <span><i class="ti ti-alert-circle"></i></span>
                <span class="hide-menu">Alerts</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="/card" aria-expanded="false">
                <span><i class="ti ti-cards"></i></span>
                <span class="hide-menu">Card</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="/forms" aria-expanded="false">
                <span><i class="ti ti-file-description"></i></span>
                <span class="hide-menu">Forms</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="/" aria-expanded="false">
                <span><i class="ti ti-typography"></i></span>
                <span class="hide-menu">Typography</span>
              </a>
            </li>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="/login" aria-expanded="false">
                <span><i class="ti ti-login"></i></span>
                <span class="hide-menu">Login</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="/login" aria-expanded="false">
                <span><i class="ti ti-user-plus"></i></span>
                <span class="hide-menu">Register</span>
              </a>
            </li>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">EXTRA</span>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="/icons" aria-expanded="false">
                <span><i class="ti ti-mood-happy"></i></span>
                <span class="hide-menu">Icons</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="/formulario" aria-expanded="false">
                <span><i class="ti ti-aperture"></i></span>
                <span class="hide-menu">Formulário</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="/cadastro" aria-expanded="false">
                <span><i class="ti ti-file-description"></i></span>
                <span class="hide-menu">Cadastro de Cliente</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <div class="body-wrapper">
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>

          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank"
                class="btn btn-primary">Download Free</a>

              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="User" width="35" height="35"
                    class="rounded-circle" />
                </a>

                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>

                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>

                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>

                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>

            </ul>
          </div>
        </nav>
      </header>

      <div class="container-fluid" style="background-color: var(--bs-secondary-bg-subtle);">
        <div class="container mt-5">
          <h1 class="mb-4">Cadastro de Pessoa</h1>

          @if ($errors->any())
          @foreach ($errors->all() as $error)
          <div class="alert alert-danger">
          {{ $error }}
          </div>
          @endif

            <form>
              <div class="col">
                <div class="row">
                  <div class="col col-sm-6">
                    <label for="nomeCompleto" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="nomeCompleto" />
                  </div>
              
                  <div class="col col-sm-6">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="cpf" />
                  </div>
                </div>
              </div>
          
              <div class="col">
                <div class="row">
                  <div class="col col-sm-6">
                    <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="dataNascimento" />
                  </div>
                <div class="col col-sm-6">
                  <label for="telefone" class="form-label">Telefone</label>
                  <input type="tel" class="form-control" id="telefone" />
                </div>
              </div>
            </div>
            
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <div class="input-group">
                <span class="input-group-text" id="email-addon">
                  <i class="bi bi-envelope-fill"></i>
                </span>
                <input type="email" class="form-control" id="email" aria-describedby="email-addon" />
              </div>
            </div>

            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="termosCheck" />
              <label class="form-check-label" for="termosCheck">Aceito os termos e condições</label>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
      </div>
    </div>
  </div>

  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>
</html>