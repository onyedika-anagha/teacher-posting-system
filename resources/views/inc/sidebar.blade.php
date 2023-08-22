<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class="{{ areActiveRoutes(['home']) }}">
                    <a href="{{ route('home') }}"><i class="feather-grid"></i> <span> Dashboard</span></a>

                </li>
                <li class="submenu {{ areActiveRoutes(['school.index', 'school.create', 'school.edit']) }}">
                    <a href="#" class=""><i class="fas fa-graduation-cap"></i> <span> Schools</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('school.index') }}" class="{{ areActiveRoutes(['school.index']) }}">School
                                List</a></li>

                        @if (isAdmin())
                            <li><a href="{{ route('school.create') }}"
                                    class="{{ areActiveRoutes(['school.create']) }}">School
                                    Add</a></li>
                        @endif
                    </ul>
                </li>
                @if (isAdmin())
                    <li class="submenu">
                        <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="teachers.html">Teacher List</a></li>
                            <li><a href="teacher-details.html">Teacher View</a></li>
                            <li><a href="add-teacher.html">Teacher Add</a></li>
                            <li><a href="edit-teacher.html">Teacher Edit</a></li>
                        </ul>
                    </li>
                @endif
                <li class="submenu {{ areActiveRoutes(['subject.index', 'subject.create', 'subject.edit']) }}">
                    <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('subject.index') }}"
                                class="{{ areActiveRoutes(['subject.index']) }}">Subject List</a></li>

                        @if (isAdmin())
                            <li><a href="{{ route('subject.create') }}"
                                    class="{{ areActiveRoutes(['subject.create']) }}">Subject
                                    Add</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
