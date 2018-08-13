<nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{ Request::is("admin") ? "active" : "" }}" href="{{ route('admin.dashboard') }}">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Blog Management</span>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link {{ Request::is("admin/new/post") ? "active" : "" }}" href="{{ route('admin.new.post') }}">
                  <span data-feather="file-text"></span>
                  New Post
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is("admin/posts") ? "active" : "" }}" href="{{ route("admin.posts") }}">
                  <span data-feather="edit"></span>
                  Manage Posts
                </a>
              </li>
            </ul>
          </div>
        </nav>