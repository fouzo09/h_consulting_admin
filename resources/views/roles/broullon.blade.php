            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  Modal Examples
                </h3>
              </div>
              <div class="card-body">
            
              </div>
              <!-- /.card -->
            </div>


            <li class="nav-item dropdown show">
              <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
                <i class="far fa-user"></i>
                <span class="badge badge-warning navbar-badge">15</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right show" style="left: inherit; right: 0px;">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <span class="float-right text-muted text-sm">3 mins</span>
                  @if (Route::has('login'))
                    <div class=" links">
                        @auth
                            <i class="fas fa-lock mr-2"></i>
                            <a href="{{ route('logut.user') }}">Logout</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                        @endauth
                    </div>
                  @endif
                </a>
                <div class="dropdown-divider"></div>
                 <i class="fas fa-edit"></i>
                <a href="#" class="dropdown-item dropdown-footer">Modifier votre mot de passe</a>
              </div>
            </li>
