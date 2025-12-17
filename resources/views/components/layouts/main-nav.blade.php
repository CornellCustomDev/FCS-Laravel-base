<header id="site-header">

    <div id="mobile-nav-dimmer"></div>

    <nav class="dropdown-menu" id="main-navigation" aria-label="Main Navigation">

        <div class="container-fluid">

            <a id="mobile-home" href="#"><span class="sr-only">Home</span></a>
            <a id="mobile-close" href="#"><span class="sr-only">Close Menu</span></a>

            <ul class="menu list-menu links">

                <li class="menu-item menu-item--expanded">

                    <a href="{{config('app.fcssite')}}/about-us">About Us</a>

                    <ul class="menu list-menu links">
                        <li class="menu-item">
                            <a href="{{config('app.fcssite')}}/announcements">Announcements</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{config('app.fcssite')}}/projects">Capital Projects</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{config('app.fcssite')}}/about-us/fcs-commitment-diversity-inclusion">Diversity</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{config('app.fcssite')}}/about-us/getting-humphreys-service-building" title="Directions for getting to Humphreys Service Building, parking, and a map of the area.">Getting to Humphreys Service Building</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{config('app.fcssite')}}/about-us/facilities-campus-services-values">Facilities and Campus Services Values</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{config('app.fcssite')}}/about-us/fcs-org-chart">FCS Org Chart</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{config('app.fcssite')}}/about-us/leadership">Leadership</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://masterplan.cornell.edu/">Master Planning</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{config('app.fcssite')}}/about-us/fcs-staff-rewards-recognition-program">Rewards and Recognition</a>
                        </li>
                        <!--<li class="menu-item">
											<a href="{{config('app.fcssite')}}/about-us/service-level-agreements">Service Level Agreements</a>
										</li>-->
                    </ul>
                </li>

                <li class="menu-item menu-item--expanded menu-item--active-trail">

                    <a href="{{config('app.fcssite')}}/services">Services</a>

                    <ul class="menu list-menu links">

                        <li class="menu-item menu-item--collapsed">
                            <a href="{{config('app.fcssite')}}/services/building-information-documents">Building Information and Documents</a>
                        </li>
                        <li class="menu-item menu-item--collapsed">
                            <a href="{{config('app.fcssite')}}/services/covid-information">COVID Information</a>
                        </li>
                        <li class="menu-item menu-item--collapsed">
                            <a href="{{config('app.fcssite')}}/services/event-support">Event Support</a>
                        </li>
                        <li class="menu-item">
                            <a href="/searchfacilities">Find Facility Information</a>
                        </li>
                        <li class="menu-item menu-item--collapsed">
                            <a href="{{config('app.fcssite')}}/departments/transportation-delivery-services/mail-delivery-services">Mail</a>
                        </li>
                        <li class="menu-item menu-item--collapsed">
                            <a href="{{config('app.fcssite')}}/services/parking-transportation">Parking and Transportation</a>
                        </li>
                        <li class="menu-item menu-item--collapsed">
                            <a href="{{config('app.fcssite')}}/services/repair-maintenance">Repair and Maintenance</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-item menu-item--expanded">

                    <a href="{{config('app.fcssite')}}/projects">Projects</a>

                    <ul class="menu list-menu links">

                        <li class="menu-item">
                            <a href="{{config('app.fcssite')}}/projects/start-project-0">Start a Project</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{config('app.fcssite')}}/projects/facilities-project-approval-request-fpar">Facilities Project Approval Requests (FPARs)</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{config('app.fcssite')}}/departments/engineering-project-management/checklist">Project Management Checklists</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{config('app.fcssite')}}/departments/engineering-project-management/project-management-resources">Project Management Guidance Documents</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{config('app.fcssite')}}/projects/project-resources-assistance">View All Project Resources...</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{config('app.fcssite')}}/projects/bidding-process">Bidding Process</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{config('app.fcssite')}}/projects/contractors-consultants">Contractors and Consultants</a>
                        </li>
                        <li class="menu-item menu-item--collapsed">
                            <a href="{{config('app.fcssite')}}/projects/cornell-design-standards-details">Design Standards &amp; Details</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{config('app.fcssite')}}/projects/fire-alarm-sprinkler-shutdowns">Fire Alarm and Sprinkler Shutdowns</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{config('app.fcssite')}}/projects/green-building-leed-support">Green Building (LEED) Support</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{config('app.fcssite')}}/projects/mapping">Mapping</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{config('app.fcssite')}}/services/repair-maintenance/schedule-utility-building-system-shutdown">Schedule a Utility Shutdown</a>
                        </li>
                        <!--<li class="menu-item">
											<a href="{{config('app.fcssite')}}/projects/utility-locating">Utility Locating</a>
										  </li>-->

                    </ul>

                </li>
                <li class="menu-item menu-item--expanded">

                    <a href="{{config('app.fcssite')}}/departments">Departments</a>

                    <ul class="menu list-menu links">

                        <li class="menu-item menu-item--collapsed">
                            <a href="{{config('app.fcssite')}}/departments/contract-colleges-facilities">Contract Colleges Facilities</a>
                        </li>
                        <li class="menu-item menu-item--collapsed">
                            <a href="{{config('app.fcssite')}}/departments/energy-sustainability">Energy and Sustainability</a>
                        </li>
                        <li class="menu-item menu-item--collapsed">
                            <a href="{{config('app.fcssite')}}/departments/engineering-project-management">Engineering and Project Management</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://ehs.cornell.edu/">Environment, Health and Safety</a>
                        </li>
                        <li class="menu-item menu-item--collapsed">
                            <a href="{{config('app.fcssite')}}/departments/facilities-management">Facilities Management</a>
                        </li>
                        <li class="menu-item menu-item--collapsed">
                            <a href="{{config('app.fcssite')}}/departments/finance-administration">Finance &amp; Administration</a>
                        </li>
                        <li class="menu-item menu-item--collapsed">
                            <a href="{{config('app.fcssite')}}/departments/human-resources-fcs">Human Resources for FCS</a>
                        </li>
                        <li class="menu-item menu-item--collapsed">
                            <a href="{{config('app.fcssite')}}/departments/office-university-architect">Office of the University Architect</a>
                        </li>
                        <li class="menu-item menu-item--collapsed">
                            <a href="{{config('app.fcssite')}}/departments/transportation-delivery-services">Transportation and Delivery Services</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-item">
                    <a href="{{config('app.fcssite')}}/projects/contractors-consultants">For Contractors</a>
                </li>
                <li class="menu-item">
                    <a href="https://intra.fcs.cornell.edu/" class="menu_icon">For FCS Employees</a>
                </li>
                <li class="menu-item">
                    <a href="{{config('app.fcssite')}}/contact-fcs">Contact FCS</a>
                </li>

            </ul>

        </div>
    </nav>
</header>

