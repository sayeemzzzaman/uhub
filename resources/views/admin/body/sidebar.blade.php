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
                <a href="{{ route('admin.admin_dashboard') }}" class="nav-link">
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

            <li class="nav-item nav-category">Contacts</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false"
                    aria-controls="uiComponents">
                    <i class="link-icon" data-feather="feather"></i>
                    <span class="link-title">Staff Contact</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="uiComponents">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            {{-- <a href="{{ route('admin.contact.show') }}" class="nav-link">All Information</a> --}}
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.contact.show') }}" class="nav-link">Faculty Information</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.contact.showTA') }}" class="nav-link">TA Information</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.contact.showLA') }}" class="nav-link">Lab attendant</a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="nav-item nav-category">Club</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false"
                    aria-controls="general-pages">
                    <i class="link-icon" data-feather="book"></i>
                    <span class="link-title">Club Details</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="general-pages">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.club.showclubs')}}" class="nav-link">Club List</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.club.add')}}" class="nav-link">Add Club</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item nav-category">Projects</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false"
                    aria-controls="general-pages">
                    <i class="link-icon" data-feather="book"></i>
                    <span class="link-title">Project Management</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="general-pages">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/general/blank-page.html" class="nav-link">Show All Project</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/general/faq.html" class="nav-link">My Projects</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/general/invoice.html" class="nav-link">Contribution</a>
                        </li>

                    </ul>
                </div>
            </li>

        </ul>
    </div>
</nav>
