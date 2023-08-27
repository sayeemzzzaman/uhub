<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('admin.admin_dashboard') }}" class="sidebar-brand">
            <img src="{{ asset('images/uhub-logo.png') }}" alt="logo" width="150px" />
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('librarian.librarian_dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Library</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="book"></i>
                    <span class="link-title">Books</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="emails">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.book.showBooks') }}" class="nav-link">All Books</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.requisition.show') }}" class="nav-link">Requisition</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/email/compose.html" class="nav-link">Study Resource</a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</nav>
