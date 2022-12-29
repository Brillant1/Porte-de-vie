

    <div class="dlabnav " style="background: #428bca">
        <div class="dlabnav-scroll">
            <ul class="metismenu" id="menu">


                <li><a class="ai-icon" href="{{ route('dashboard') }}" aria-expanded="false">
                        <i class="la la-calendar"></i>
                        <span class="nav-text">Dashbord</span>
                    </a>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-graduation-cap"></i>
                    <span class="nav-text">Actualités</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('actualites.index') }}">Actualités</a></li>
                    <li><a href="{{ route('actualites.create') }}">Ajouter une nouvelle</a></li>

                </ul>
            </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-user"></i>
                        <span class="nav-text">Rendez-vous</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('appointments.index') }}">Prophétiques</a></li>
                        <li><a href="{{ route('simpleAppointments') }}">Simples</a></li>

                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-users"></i>
                        <span class="nav-text">Messages</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('messages.index') }}">Tous les messages</a></li>
                    </ul>
                </li>

                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-book"></i>
                        <span class="nav-text">Library</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="all-library.html">All Library</a></li>
                        <li><a href="add-library.html">Add Library</a></li>
                        <li><a href="edit-library.html">Edit Library</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-building"></i>
                        <span class="nav-text">Departments</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="all-departments.html">All Departments</a></li>
                        <li><a href="add-departments.html">Add Departments</a></li>
                        <li><a href="edit-departments.html">Edit Departments</a></li>
                    </ul>
                </li>





            </ul>
        </div>
    </div>
