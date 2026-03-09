<!-- Defining the desktop header section -->
<header class="header">
    <!-- Creating a responsive navigation bar using Bootstrap -->
    <nav class="navbar navbar-expand-lg">
        <!-- Wrapping navbar content in a container for centering -->
        <div class="container">
            <!-- Displaying the logo as the navbar brand -->
            <a class="navbar-brand" href="/">
                <img src="assets/imgs/logo.png" width="198" height="49" alt="logo">
            </a>
            <!-- Grouping course dropdown and search bar for flexible layout -->
            <div class="d-flex course-dropdown order-sm-0 order-1">
                <!-- Setting up the courses dropdown menu -->
                <div class="dropdown">
                    <!-- Triggering the dropdown with a button -->
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Courses</button>
                    <!-- Defining the dropdown menu content -->
                    <div class="dropdown-menu">
                        <!-- Containing dropdown content within a centered container -->
                        <div class="container">
                            <!-- Wrapping course dropdown content for styling -->
                            <div class="course-dropdown-wraper">
                                <!-- Creating a scrollable container for course category tabs -->
                                <div class="course-tabs-container scrollbar-inner">
                                    <!-- Listing navigation pills for course categories -->
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <!-- Labeling the Goals section -->
                                        <li>
                                            <h4>Goals</h4></li>
                                        <!-- Defining the "Get a Job" tab button -->
                                        <li class="nav-item" role="presentation">
                                            <button class="active" id="pills-01m-tab" data-bs-toggle="pill" data-bs-target="#pills-01m" type="button" role="tab" aria-controls="pills-01m" aria-selected="true">
                                                <i class="fa-solid fa-certificate"></i>Get a Job
                                            </button>
                                        </li>
                                        <!-- Labeling the Domains section -->
                                        <li>
                                            <h4>Domains</h4></li>
                                        <!-- Defining the Red Hat tab button -->
                                        <li class="nav-item" role="presentation">
                                            <button class="" id="pills-02m-tab" data-bs-toggle="pill" data-bs-target="#pills-02m" type="button" role="tab" aria-controls="pills-02m" aria-selected="false">
                                                <i class="fa-solid fa-briefcase"></i>Red Hat
                                            </button>
                                        </li>
                                        <!-- Defining the EC-Council tab button -->
                                        <li class="nav-item" role="presentation">
                                            <button class="" id="pills-03m-tab" data-bs-toggle="pill" data-bs-target="#pills-03m" type="button" role="tab" aria-controls="pills-03m" aria-selected="false">
                                                <i class="fa-solid fa-clock"></i>Cybersecurity & Ethical Hacking - EC-Council
                                            </button>
                                        </li>
                                        <!-- Defining the OffSec tab button -->
                                        <li class="nav-item" role="presentation">
                                            <button class="" id="pills-cyber-tab" data-bs-toggle="pill" data-bs-target="#pills-cyber" type="button" role="tab" aria-controls="pills-cyber" aria-selected="false">
                                                <i class="fa-solid fa-shield-alt"></i>Cybersecurity & Ethical Hacking - OffSec
                                            </button>
                                        </li>
                                        <!-- Defining the Networking & Infrastructure tab button -->
                                        <li class="nav-item" role="presentation">
                                            <button class="" id="pills-linux-tab" data-bs-toggle="pill" data-bs-target="#pills-linux" type="button" role="tab" aria-controls="pills-linux" aria-selected="false">
                                                <i class="fa-solid fa-server"></i>Networking & Infrastructure (Cisco, VMware, Veritas)
                                            </button>
                                        </li>
                                        <!-- Defining the Cloud tab button -->
                                        <li class="nav-item" role="presentation">
                                            <button class="" id="pills-cloud-devops-tab" data-bs-toggle="pill" data-bs-target="#pills-cloud-devops" type="button" role="tab" aria-controls="pills-cloud-devops" aria-selected="false">
                                                <i class="fa-solid fa-cloud"></i>Cloud (AWS, Azure, GCP)
                                            </button>
                                        </li>
                                        <!-- Defining the DevOps tab button -->
                                        <li class="nav-item" role="presentation">
                                            <button class="" id="pills-network-tab" data-bs-toggle="pill" data-bs-target="#pills-network" type="button" role="tab" aria-controls="pills-network" aria-selected="false">
                                                <i class="fa-solid fa-network-wired"></i>DevOps (Docker, Kubernetes)
                                            </button>
                                        </li>
                                        <!-- Defining the Programming & Databases tab button -->
                                        <li class="nav-item" role="presentation">
                                            <button class="" id="pills-prog-db-tab" data-bs-toggle="pill" data-bs-target="#pills-prog-db" type="button" role="tab" aria-controls="pills-prog-db" aria-selected="false">
                                                <i class="fa-solid fa-database"></i>Programming & Databases (Python, Oracle, SQL, Big Data)
                                            </button>
                                        </li>
                                        <!-- Defining the AI, ML & Data Science tab button -->
                                        <li class="nav-item" role="presentation">
                                            <button class="" id="pills-ai-ml-tab" data-bs-toggle="pill" data-bs-target="#pills-ai-ml" type="button" role="tab" aria-controls="pills-ai-ml" aria-selected="false">
                                                <i class="fa-solid fa-brain"></i>AI, ML & Data Science
                                            </button>
                                        </li>
                                        <!-- Defining the Web & Digital Skills tab button -->
                                        <li class="nav-item" role="presentation">
                                            <button class="" id="pills-web-digital-tab" data-bs-toggle="pill" data-bs-target="#pills-web-digital" type="button" role="tab" aria-controls="pills-web-digital" aria-selected="false">
                                                <i class="fa-solid fa-globe"></i>Web & Digital Skills (Full Stack, Web Tech, Digital Marketing, Graphic Design)
                                            </button>
                                        </li>
                                        <!-- Defining the Corporate & Career Training tab button -->
                                        <li class="nav-item" role="presentation">
                                            <button class="" id="pills-corp-career-tab" data-bs-toggle="pill" data-bs-target="#pills-corp-career" type="button" role="tab" aria-controls="pills-corp-career" aria-selected="false">
                                                <i class="fa-solid fa-users"></i>Corporate & Career Training (Soft Skills, Internships, Job-Oriented Programs)
                                            </button>
                                        </li>
                                    </ul>
                                    <!-- Providing a button to browse all domains -->
                                    <button class="btn btn-all-domains"><span>Browse All Domains</span><i class="fa-solid fa-arrow-up"></i></button>
                                </div>
                                <!-- Containing the content for course tabs -->
                                <div class="course-tabs-content">
                                    <!-- Wrapping tab content for styling -->
                                    <div class="course-tabs-card">
                                        <!-- Enabling scrolling for tab content -->
                                        <div class="course-tabs-scrollbar">
                                            <!-- Defining the tab content area -->
                                            <div class="tab-content" id="pills-tabContent">
                                                <!-- Displaying content for the "Get a Job" tab -->
                                                <div class="tab-pane fade show active" id="pills-01m" role="tabpanel" aria-labelledby="pills-01m-tab" tabindex="0">
                                                    <!-- Wrapping job-oriented programs content -->
                                                    <div class="course-tabs-wraper">
                                                        <!-- Creating a scrollable row for job programs -->
                                                        <div class="course-tabs-row scrollbar-inner">
                                                            <!-- Presenting the overview card for job-oriented programs -->
                                                            <div class="column w-100">
                                                                <div class="nav-card">
                                                                    <div class="icon-img">
                                                                        <img src="assets/img/icons/job.webp" alt="Job Oriented Course">
                                                                    </div>
                                                                    <div class="info-width">
                                                                        <div class="info">
                                                                            <h4>Our Job Oriented Programs in 6 Domains</h4>
                                                                            <p>Hands-on programs designed to prepare you for in-demand IT jobs with practical skills and certifications. Open to anyone with interest in tech field (except where noted).</p>
                                                                        </div>
                                                                        <a href="https://training.webasha.com/job-oriented-programs" class="btn-view text-decoration-none">View All Programs</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Listing Cloud Admin program -->
                                                            <div class="column">
                                                                <h5>Cloud Admin</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/#" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/cloud.webp" alt="cloud">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Cloud Admin<span class="dots"></span><span>6 Months</span></h6>
                                                                        <h6 class="desc2">Job-Oriented Program in Cloud Administration</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View Details</button>
                                                            </div>
                                                            <!-- Listing DevOps Engineer program -->
                                                            <div class="column">
                                                                <h5>DevOps Engineer</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/#" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/devops.webp" alt="devops">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">DevOps Engineer<span class="dots"></span><span>8 Months</span></h6>
                                                                        <h6 class="desc2">Job-Oriented Program in DevOps Engineer</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View Details</button>
                                                            </div>
                                                            <!-- Listing Cyber Security program -->
                                                            <div class="column">
                                                                <h5>Cyber Security</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/#" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/cybersecurity.webp" alt="cybersecurity">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Cyber Security<span class="dots"></span><span>8 Months</span></h6>
                                                                        <h6 class="desc2">Job-Oriented Program in Cyber Security</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View Details</button>
                                                            </div>
                                                            <!-- Listing Cyber Security with Advance Pen Tester program -->
                                                            <div class="column">
                                                                <h5>Cyber Security with Advance Pen Tester</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/#" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/cybersecurity.webp" alt="cybersecurity">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Cyber Security<span class="dots"></span><span>12 Months</span></h6>
                                                                        <h6 class="desc2">Job-Oriented Program in Cyber Security with Advanced Penetration Testing</h6>
                                                                        <div class="seller new">New</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View Details</button>
                                                            </div>
                                                            <!-- Listing Data Science with AI/ML program -->
                                                            <div class="column">
                                                                <h5>Data Science with AI/ML</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/#" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/data-science.webp" alt="data science">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Data Science<span class="dots"></span><span>6 Months</span></h6>
                                                                        <h6 class="desc2">Job-Oriented Program in Data Science with AI/ML</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View Details</button>
                                                            </div>
                                                            <!-- Listing Full Stack with Python program -->
                                                            <div class="column">
                                                                <h5>Full Stack with Python</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/#" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/full-stack.webp" alt="full stack">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Full Stack<span class="dots"></span><span>6 Months</span></h6>
                                                                        <h6 class="desc2">Job-Oriented Program in Full Stack with Python (Computer Background Required)</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View Details</button>
                                                            </div>
                                                        </div>
                                                        <!-- Displaying authorized training partners -->
                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Authorized Training & Certification Exam Center</h5>
                                                                    <!-- Listing Red Hat partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/redhat.webp" alt="Red Hat">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Red Hat</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing EC-Council partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>EC-Council</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing OffSec partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/offsec.webp" alt="OffSec">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>OffSec</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing AWS Cloud partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/aws.webp" alt="aws">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>AWS Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing Microsoft Azure partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/azure.webp" alt="Azure">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Microsoft Azure</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing Google Cloud partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/google.webp" alt="Google Cloud">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Google Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing Cisco partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/cisco.webp" alt="cisco">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Cisco</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing VMware partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/vmware.webp" alt="vmware">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>VMware</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing Oracle partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/oracle.webp" alt="Oracle">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Oracle</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing The Linux Foundation partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/linux.webp" alt="The Linux Foundation">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>The Linux Foundation</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing CompTIA partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/comptia.webp" alt="Comptia">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Comptia</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Displaying content for the Red Hat tab -->
                                                <div class="tab-pane fade" id="pills-02m" role="tabpanel" aria-labelledby="pills-02m-tab" tabindex="0">
                                                    <!-- Wrapping Red Hat courses content -->
                                                    <div class="course-tabs-wraper">
                                                        <!-- Creating a scrollable row for Red Hat tracks -->
                                                        <div class="course-tabs-row scrollbar-inner">
                                                            <!-- Presenting the overview card for Red Hat certifications -->
                                                            <div class="column w-100">
                                                                <div class="nav-card">
                                                                    <div class="icon-img">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info-width">
                                                                        <div class="info">
                                                                            <h4>Red Hat Training & Certifications</h4>
                                                                            <p>Performance-based certifications and training for Linux, cloud, automation, security, and development.</p>
                                                                        </div>
                                                                        <a href="https://training.webasha.com/red-hat" class="btn-view text-decoration-none">View All Red Hat Courses</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Listing Core System Administration track -->
                                                            <div class="column">
                                                                <h5>Core System Administration Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/rhcsa1" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">RHCSA I<span class="dots"></span><span>RH124v10</span></h6>
                                                                        <h6 class="desc2">Red Hat Certified System Administrator (RHCSA) I</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/rhcsa2" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">RHCSA II<span class="dots"></span><span>RH134v10</span></h6>
                                                                        <h6 class="desc2">Red Hat Certified System Administrator (RHCSA) II</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/redhat-linux-rhcsa-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">RHCSA RH199<span class="dots"></span><span>EX200v10</span></h6>
                                                                        <h6 class="desc2">Red Hat Certified System Administrator (RHCSA)</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/rhce" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">RHCE RH294<span class="dots"></span><span>EX294</span></h6>
                                                                        <h6 class="desc2">Red Hat Certified Engineer (RHCE)</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/linux-automation-training-rh294" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Red Hat<span class="dots"></span><span>RH294</span></h6>
                                                                        <h6 class="desc2">Red Hat Certified Specialist in Ansible Automation</h6>
                                                                        <div class="seller new">New</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/red-hat-satellite-administration-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">RH403<span class="dots"></span><span>EX403</span></h6>
                                                                        <h6 class="desc2">Red Hat Satellite 6 Administration</h6>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/rh436" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">RH436<span class="dots"></span><span>EX436</span></h6>
                                                                        <h6 class="desc2">Red Hat Certified Specialist in High Availability Clustering</h6>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- Listing OpenShift track -->
                                                            <div class="column">
                                                                <h5>OpenShift Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/containers-kubernetes-red-hat-openshift-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">DO188<span class="dots"></span><span>EX188</span></h6>
                                                                        <h6 class="desc2">Introduction to Containers with Podman</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/openshift" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">DO280<span class="dots"></span><span>EX280</span></h6>
                                                                        <h6 class="desc2">Red Hat OpenShift Administration II (Configuring a production cluster)</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/red-hat-openshift-virtualization" class="course-link text-decoration-none" aria-label="DO316 Managing VMs with OpenShift Virtualization">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">AI267<span class="dots"></span><span>EX267</span></h6>
                                                                        <h6 class="desc2">Developing and Deploying AI/ML Applications on Red Hat OpenShift AI</h6>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/red-hat-openshift-virtualization" class="course-link text-decoration-none" aria-label="DO316 Managing VMs with OpenShift Virtualization">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">DO316<span class="dots"></span><span>EX316</span></h6>
                                                                        <h6 class="desc2">Managing Virtual Machines with Red Hat OpenShift Virtualization</h6>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/red-hat-openshift-advanced" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">DO380<span class="dots"></span><span>EX380</span></h6>
                                                                        <h6 class="desc2">Red Hat OpenShift Administration III / Automation & Integration (advanced admin/automation topics)</h6>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/red-hat-openshift-advanced" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">DO430<span class="dots"></span><span>EX430</span></h6>
                                                                        <h6 class="desc2">Securing Kubernetes Clusters with Red Hat Advanced Cluster Security</h6>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/red-hat-openshift-advanced" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">DO480<span class="dots"></span><span>EX480</span></h6>
                                                                        <h6 class="desc2">Multicluster Management with Red Hat OpenShift — multi-cluster operations & platform management</h6>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- Listing Developer track -->
                                                            <div class="column">
                                                                <h5>Developer Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/red-hat-rhcjd" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Red Hat<span class="dots"></span><span>DO101 + AD183</span></h6>
                                                                        <h6 class="desc2">Red Hat Certified Enterprise Application Developer (RHCJD)</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/red-hat-rhcemd" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Red Hat<span class="dots"></span><span>DO283 + AD248</span></h6>
                                                                        <h6 class="desc2">Red Hat Certified Enterprise Microservices Developer (RHCEMD)</h6>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/containers-kubernetes-red-hat-openshift-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Red Hat<span class="dots"></span><span>DO180</span></h6>
                                                                        <h6 class="desc2">Red Hat Certified Specialist in Containers and Kubernetes</h6>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- Listing Cloud and Virtualization track -->
                                                            <div class="column">
                                                                <h5>Cloud and Virtualization Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/redhat-openstack-cl110-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">CL110<span class="dots"></span><span>PE110</span></h6>
                                                                        <h6 class="desc2">Red Hat Certified System Administrator in Red Hat OpenStack</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/open-stack" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">CL210<span class="dots"></span><span>EX210</span></h6>
                                                                        <h6 class="desc2">Red Hat Certified Engineer in Red Hat OpenStack</h6>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- Listing Security track -->
                                                            <div class="column">
                                                                <h5>Security Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/red-hat-security-linux" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">RH415<span class="dots"></span><span>EX415</span></h6>
                                                                        <h6 class="desc2">Red Hat Certified Specialist in Security: Linux</h6>
                                                                        <div class="seller new">New</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/red-hat-identity-management" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">RH362<span class="dots"></span><span>EX362</span></h6>
                                                                        <h6 class="desc2">Red Hat Certified Specialist in Identity Management</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/rh442" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">RH442<span class="dots"></span><span>EX442</span></h6>
                                                                        <h6 class="desc2">Red Hat Certified Specialist in Performance Tuning</h6>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- Listing Architect Level (RHCA) track -->
                                                            <div class="column">
                                                                <h5>Architect Level (RHCA)</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/#" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Red Hat<span class="dots"></span><span>Advanced</span></h6>
                                                                        <h6 class="desc2">RHCA - Infrastructure Track</h6>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/#" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Red Hat<span class="dots"></span><span>Advanced</span></h6>
                                                                        <h6 class="desc2">RHCA - Enterprise Applications Track</h6>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/#" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/redhat.webp" alt="red hat">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Red Hat<span class="dots"></span><span>Advanced</span></h6>
                                                                        <h6 class="desc2">RHCA - DevOps Track</h6>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- Displaying authorized training partners for Red Hat -->
                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Authorized Training & Certification Exam Center</h5>
                                                                    <!-- Listing Red Hat partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/redhat.webp" alt="Red Hat">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Red Hat</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing EC-Council partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>EC-Council</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing OffSec partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/offsec.webp" alt="OffSec">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>OffSec</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing AWS Cloud partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/aws.webp" alt="aws">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>AWS Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing Microsoft Azure partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/azure.webp" alt="Azure">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Microsoft Azure</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing Google Cloud partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/google.webp" alt="Google Cloud">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Google Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing Cisco partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/cisco.webp" alt="cisco">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Cisco</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing VMware partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/vmware.webp" alt="vmware">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>VMware</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing Oracle partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/oracle.webp" alt="Oracle">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Oracle</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing The Linux Foundation partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/linux.webp" alt="The Linux Foundation">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>The Linux Foundation</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing CompTIA partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/comptia.webp" alt="Comptia">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Comptia</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Displaying content for the EC-Council tab -->
                                                <div class="tab-pane fade" id="pills-03m" role="tabpanel" aria-labelledby="pills-03m-tab" tabindex="0">
                                                    <!-- Wrapping EC-Council courses content -->
                                                    <div class="course-tabs-wraper">
                                                        <!-- Creating a scrollable row for EC-Council tracks -->
                                                        <div class="course-tabs-row scrollbar-inner">
                                                            <!-- Presenting the overview card for EC-Council certifications -->
                                                            <div class="column w-100">
                                                                <div class="nav-card">
                                                                    <div class="icon-img">
                                                                        <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                    </div>
                                                                    <div class="info-width">
                                                                        <div class="info">
                                                                            <h4>EC-Council Training & Certifications</h4>
                                                                            <p>Globally recognized cybersecurity certifications focusing on ethical hacking, forensics, network defense, and more.</p>
                                                                        </div>
                                                                        <a href="https://training.webasha.com/ec-council" class="btn-view text-decoration-none">View All EC-Council Courses</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Listing Ethical Hacking track -->
                                                            <div class="column">
                                                                <h5>Ethical Hacking Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/ethical-hacking-ceh-cyber-security-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">CEH v13 AI<span class="dots"></span><span>with AI</span></h6>
                                                                        <h6 class="desc2">Certified Ethical Hacker (CEH)</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/certified-ethical-hacker-ceh-practical-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">CEH v13 Practical<span class="dots"></span><span>with AI</span></h6>
                                                                        <h6 class="desc2">Certified Ethical Hacker (CEH)</h6>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/ceh-master-training" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">CEH v13 Master<span class="dots"></span><span>with AI</span></h6>
                                                                        <h6 class="desc2">CEH v13 + Practical</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/ec-council-certified-security-analyst-ecsa-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">ECSA v10<span class="dots"></span><span>ECSA v10</span></h6>
                                                                        <h6 class="desc2">EC-Council Certified Security Analyst (ECSA)</h6>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/cpent-training" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">CPENT<span class="dots"></span><span>v2</span></h6>
                                                                        <h6 class="desc2">Certified Penetration Testing Professional (CPENT)</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/licensed-penetration-tester-lpt-master-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">LPT<span class="dots"></span><span>v2</span></h6>
                                                                        <h6 class="desc2">Licensed Penetration Tester (LPT)</h6>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- Listing Forensics and Monitoring Work tracks -->
                                                            <div class="column">
                                                                <h5>Forensics Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/computer-hacking-forensic-investigator-chfi-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">CHFI v11<span class="dots"></span><span>with AI</span></h6>
                                                                        <h6 class="desc2">Computer Hacking Forensic Investigator (CHFI)</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/ecih-training" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">ECIH<span class="dots"></span><span>v3</span></h6>
                                                                        <h6 class="desc2">EC-Council Certified Incident Handler (ECIH)</h6>
                                                                    </div>
                                                                </a>
                                                                <h5>Monitoring Work</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/soc-analyst-training" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">SOC Analyst v2<span class="dots"></span><span>with AI</span></h6>
                                                                        <h6 class="desc2">Certified SOC Analyst (CSA)</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/certified-threat-intelligence-analyst-ctia-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">CTIA<span class="dots"></span><span>with AI</span></h6>
                                                                        <h6 class="desc2">Certified Threat Intelligence Analyst (CTIA)</h6>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- Listing Network Defense track -->
                                                            <div class="column">
                                                                <h5>Network Defense Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/certified-network-defender-cnd-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">CND<span class="dots"></span><span>v2</span></h6>
                                                                        <h6 class="desc2">Certified Network Defender (CND)</h6>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- Listing Executive & Management track -->
                                                            <div class="column">
                                                                <h5>Executive & Management Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/cciso-training" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">CCISO<span class="dots"></span><span>v3</span></h6>
                                                                        <h6 class="desc2">Certified Chief Information Security Officer (CCISO)</h6>
                                                                        <div class="seller new">New</div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- Listing Other Specialists track -->
                                                            <div class="column">
                                                                <h5>Other Specialists</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/vapt-training" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">VAPT<span class="dots"></span><span>with AI</span></h6>
                                                                        <h6 class="desc2">Vulnerability Assessment and Penetration Testing (VAPT)</h6>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/wapt-training" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">WAPT<span class="dots"></span><span>with AI</span></h6>
                                                                        <h6 class="desc2">Web Application and Penetration Testing (WAPT)</h6>
                                                                        <div class="seller new">New</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/cct-training" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">CCT<span class="dots"></span><span>Foundation</span></h6>
                                                                        <h6 class="desc2">Certified Cybersecurity Technician (CCT)</h6>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/edrp-training" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">EDRP v3<span class="dots"></span><span>with AI</span></h6>
                                                                        <h6 class="desc2">EC-Council Disaster Recovery Professional (EDRP)</h6>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- Displaying authorized training partners for EC-Council -->
                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Authorized Training & Certification Exam Center</h5>
                                                                    <!-- Listing Red Hat partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/redhat.webp" alt="Red Hat">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Red Hat</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing EC-Council partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>EC-Council</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing OffSec partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/offsec.webp" alt="OffSec">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>OffSec</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing AWS Cloud partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/aws.webp" alt="aws">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>AWS Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing Microsoft Azure partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/azure.webp" alt="Azure">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Microsoft Azure</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing Google Cloud partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/google.webp" alt="Google Cloud">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Google Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing Cisco partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/cisco.webp" alt="cisco">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Cisco</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing VMware partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/vmware.webp" alt="vmware">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>VMware</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing Oracle partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/oracle.webp" alt="Oracle">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Oracle</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing The Linux Foundation partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/linux.webp" alt="The Linux Foundation">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>The Linux Foundation</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing CompTIA partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/comptia.webp" alt="Comptia">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Comptia</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Displaying content for the OffSec tab -->
                                                <div class="tab-pane fade" id="pills-cyber" role="tabpanel" aria-labelledby="pills-cyber-tab" tabindex="0">
                                                    <!-- Wrapping OffSec courses content -->
                                                    <div class="course-tabs-wraper">
                                                        <!-- Creating a scrollable row for OffSec tracks -->
                                                        <div class="course-tabs-row scrollbar-inner">
                                                            <!-- Presenting the overview card for OffSec certifications -->
                                                            <div class="column w-100">
                                                                <div class="nav-card">
                                                                    <div class="icon-img">
                                                                        <img src="assets/img/icons/offsec.webp" alt="OffSec">
                                                                    </div>
                                                                    <div class="info-width">
                                                                        <div class="info">
                                                                            <h4>OffSec Training & Certifications</h4>
                                                                            <p>Hands-on, performance-based certifications in offensive security, penetration testing, and exploit development.</p>
                                                                        </div>
                                                                        <a href="https://training.webasha.com/offsec" class="btn-view text-decoration-none">View All OffSec Courses</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Listing Penetration Testing track -->
                                                            <div class="column">
                                                                <h5>Penetration Testing Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/offsec-oscp" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/offsec.webp" alt="Offsec">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">OffSec<span class="dots"></span><span>PWK</span></h6>
                                                                        <h6 class="desc2">Offensive Security Certified Professional (OSCP)</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/offsec-osep" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/offsec.webp" alt="Offsec">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">OffSec<span class="dots"></span><span>Evasion Techniques</span></h6>
                                                                        <h6 class="desc2">Offensive Security Experienced Penetration Tester (OSEP)</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Penetration Testing Courses</button>
                                                            </div>
                                                            <!-- Listing Exploit Development track -->
                                                            <div class="column">
                                                                <h5>Exploit Development Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/offsec-osed" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/offsec.webp" alt="Offsec">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">OffSec<span class="dots"></span><span>Windows User-Mode</span></h6>
                                                                        <h6 class="desc2">Offensive Security Exploit Developer (OSED)</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Exploit Development Courses</button>
                                                            </div>
                                                            <!-- Listing Web Attacks track -->
                                                            <div class="column">
                                                                <h5>Web Attacks Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/offsec-oswe" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/offsec.webp" alt="Offsec">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">OffSec<span class="dots"></span><span>AWAE</span></h6>
                                                                        <h6 class="desc2">Offensive Security Web Expert (OSWE)</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Web Attacks Courses</button>
                                                            </div>
                                                            <!-- Listing Defensive track -->
                                                            <div class="column">
                                                                <h5>Defensive Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/offsec-osda" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/offsec.webp" alt="Offsec">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">OffSec<span class="dots"></span><span>SOC-200</span></h6>
                                                                        <h6 class="desc2">Offensive Security Defensive Analyst (OSDA)</h6>
                                                                        <div class="seller new">New</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Defensive Courses</button>
                                                            </div>
                                                            <!-- Listing Specialized Tracks -->
                                                            <div class="column">
                                                                <h5>Specialized Tracks</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/offsec-osmr" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/offsec.webp" alt="Offsec">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">OffSec<span class="dots"></span><span>MacOS Control Bypass</span></h6>
                                                                        <h6 class="desc2">Offensive Security MacOS Researcher (OSMR)</h6>
                                                                        <div class="seller new">New</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Specialized Courses</button>
                                                            </div>
                                                        </div>
                                                        <!-- Displaying authorized training partners for OffSec -->
                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Authorized Training & Certification Exam Center</h5>
                                                                    <!-- Listing Red Hat partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/redhat.webp" alt="Red Hat">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Red Hat</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing EC-Council partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>EC-Council</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing OffSec partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/offsec.webp" alt="OffSec">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>OffSec</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing AWS Cloud partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/aws.webp" alt="aws">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>AWS Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing Microsoft Azure partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/azure.webp" alt="Azure">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Microsoft Azure</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing Google Cloud partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/google.webp" alt="Google Cloud">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Google Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing Cisco partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/cisco.webp" alt="cisco">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Cisco</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing VMware partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/vmware.webp" alt="vmware">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>VMware</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing Oracle partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/oracle.webp" alt="Oracle">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Oracle</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing The Linux Foundation partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/linux.webp" alt="The Linux Foundation">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>The Linux Foundation</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing CompTIA partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/comptia.webp" alt="Comptia">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Comptia</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Displaying content for the Cisco tab -->
                                                <div class="tab-pane fade" id="pills-linux" role="tabpanel" aria-labelledby="pills-linux-tab" tabindex="0">
                                                    <!-- Wrapping Cisco courses content -->
                                                    <div class="course-tabs-wraper">
                                                        <!-- Creating a scrollable row for Cisco tracks -->
                                                        <div class="course-tabs-row scrollbar-inner">
                                                            <!-- Presenting the overview card for Cisco certifications -->
                                                            <div class="column w-100">
                                                                <div class="nav-card">
                                                                    <div class="icon-img">
                                                                        <img src="assets/img/icons/cisco.webp" alt="CISCO">
                                                                    </div>
                                                                    <div class="info-width">
                                                                        <div class="info">
                                                                            <h4>Cisco Training & Certifications</h4>
                                                                            <p>Industry-leading certifications in networking, security, collaboration, data center, and software development.</p>
                                                                        </div>
                                                                        <a href="https://training.webasha.com/cisco" class="btn-view text-decoration-none">View All Cisco Courses</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Listing Enterprise Networking track -->
                                                            <div class="column">
                                                                <h5>Enterprise Networking Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/ccna" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/cisco.webp" alt="cisco">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">CCNA<span class="dots"></span><span>200-301</span></h6>
                                                                        <h6 class="desc2">Cisco Certified Network Associate (CCNA)</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/ccnp" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/cisco.webp" alt="cisco">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">CCNP<span class="dots"></span><span>350-401 ENCOR</span></h6>
                                                                        <h6 class="desc2">Cisco Certified Network Professional Enterprise (CCNP Enterprise)</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- Listing Security track -->
                                                            <div class="column">
                                                                <h5>Security Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/ccnp-security" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/cisco.webp" alt="cisco">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">CCNP Security<span class="dots"></span><span>350-701 SCOR</span></h6>
                                                                        <h6 class="desc2">Cisco Certified Network Professional Security (CCNP Security)</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- Listing Collaboration track -->
                                                            <div class="column">
                                                                <h5>Collaboration Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/ccnp-collaboration" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/cisco.webp" alt="cisco">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">CCNP Collaboration<span class="dots"></span><span>350-801 CLCOR</span></h6>
                                                                        <h6 class="desc2">Cisco Certified Network Professional Collaboration (CCNP Collaboration)</h6>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- Listing Data Center track -->
                                                            <div class="column">
                                                                <h5>Data Center Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/ccnp-data-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/cisco.webp" alt="cisco">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">CCNP Data Center<span class="dots"></span><span>350-601 DCCOR</span></h6>
                                                                        <h6 class="desc2">Cisco Certified Network Professional Data Center (CCNP Data Center)</h6>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- Listing DevNet track -->
                                                            <div class="column">
                                                                <h5>DevNet Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/devnet-associate" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/cisco.webp" alt="cisco">
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">DevNet<span class="dots"></span><span>200-901 DEVASC</span></h6>
                                                                        <h6 class="desc2">Cisco Certified DevNet Associate</h6>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- Displaying authorized training partners for Cisco -->
                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Authorized Training & Certification Exam Center</h5>
                                                                    <!-- Listing Red Hat partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/redhat.webp" alt="Red Hat">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Red Hat</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing EC-Council partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/ec.webp" alt="EC-Council">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>EC-Council</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing OffSec partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/offsec.webp" alt="OffSec">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>OffSec</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing AWS Cloud partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/aws.webp" alt="aws">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>AWS Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing Microsoft Azure partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/azure.webp" alt="Azure">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Microsoft Azure</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing Google Cloud partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/google.webp" alt="Google Cloud">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Google Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing Cisco partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/cisco.webp" alt="cisco">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Cisco</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing VMware partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/vmware.webp" alt="vmware">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>VMware</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing Oracle partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/oracle.webp" alt="Oracle">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Oracle</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing The Linux Foundation partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/linux.webp" alt="The Linux Foundation">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>The Linux Foundation</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Listing CompTIA partner -->
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/comptia.webp" alt="Comptia">
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Comptia</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Displaying content for the Cloud tab -->
                                                <div class="tab-pane fade" id="pills-cloud-devops" role="tabpanel" aria-labelledby="pills-cloud-devops-tab" tabindex="0">
                                                    <!-- Wrapping Cloud courses content -->
                                                    <div class="course-tabs-wraper">
                                                        <!-- Creating a scrollable row for Cloud tracks -->
                                                        <div class="course-tabs-row scrollbar-inner">
                                                            <!-- Presenting the overview card for Cloud certifications -->
                                                            <div class="column w-100">
                                                                <div class="nav-card">
                                                                    <div class="icon-img">
                                                                        <img src="assets/img/icons/cloud.webp" alt="Cloud">
                                                                    </div>
                                                                    <div class="info-width">
                                                                        <div class="info">
                                                                            <h4>Cloud Training & Certifications</h4>
                                                                            <p>Industry-leading certifications in cloud computing, architecture, security, development, and operations across major providers.</p>
                                                                        </div>
                                                                        <a href="https://training.webasha.com/cloud" class="btn-view text-decoration-none">View All Cloud Courses</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Listing AWS track -->
                                                            <div class="column">
                                                                <h5>AWS Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/AWS-training-in-pune" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/aws.webp" alt="aws" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">AWS<span class="dots"></span><span>Duration Varies</span></h6>
                                                                        <h6 class="desc2">AWS Training in Pune</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/aws-certified-cloud-practitioner-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/aws.webp" alt="aws" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">AWS<span class="dots"></span><span>CLF-C02</span></h6>
                                                                        <h6 class="desc2">AWS Certified Cloud Practitioner</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/aws-solutions-architect-professional-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/aws.webp" alt="aws" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">AWS<span class="dots"></span><span>Duration Varies</span></h6>
                                                                        <h6 class="desc2">AWS Solutions Architect Professional</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/aws-certified-sysops-administrator-associate-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/aws.webp" alt="aws" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">AWS<span class="dots"></span><span>Duration Varies</span></h6>
                                                                        <h6 class="desc2">AWS SysOps Administrator (Associate)</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/aws-certified-security-specialty-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/aws.webp" alt="aws" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">AWS<span class="dots"></span><span>Duration Varies</span></h6>
                                                                        <h6 class="desc2">AWS Security Specialty</h6>
                                                                        <div class="seller new">New</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all AWS Courses</button>
                                                            </div>
                                                            <div class="column">
                                                                <h5>Azure Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/microsoft-azure-fundamentals-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/azure.webp" alt="azure" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">AZ-900<span class="dots"></span><span>Duration Varies</span></h6>
                                                                        <h6 class="desc2">Microsoft Azure Fundamentals</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/microsoft-azure-administrator-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/azure.webp" alt="azure" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">AZ-104<span class="dots"></span><span>Duration Varies</span></h6>
                                                                        <h6 class="desc2">Microsoft Azure Administrator</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/microsoft-azure-architect-design-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/azure.webp" alt="azure" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">AZ-400<span class="dots"></span><span>Duration Varies</span></h6>
                                                                        <h6 class="desc2">Microsoft Azure DevOps</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/microsoft-azure-architect-technologies-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/azure.webp" alt="azure" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">AZ-305<span class="dots"></span><span>Duration Varies</span></h6>
                                                                        <h6 class="desc2">Microsoft Azure Architect - Design </h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/microsoft-azure-security-technologies-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/azure.webp" alt="azure" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">AZ-500<span class="dots"></span><span>Duration Varies</span></h6>
                                                                        <h6 class="desc2">Microsoft Azure Security Technologies</h6>
                                                                        <div class="seller new">New</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Azure Courses</button>
                                                            </div>
                                                            <div class="column">
                                                                <h5>Google Cloud Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/google-professional-cloud-architect-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/google.webp" alt="google cloud" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">GCP<span class="dots"></span><span>Professional</span></h6>
                                                                        <h6 class="desc2">Google Professional Cloud Architect</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/google-professional-cloud-developer-architect-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/google.webp" alt="google cloud" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">GCP<span class="dots"></span><span>Professional</span></h6>
                                                                        <h6 class="desc2">Google Professional Cloud Developer</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/google-professional-cloud-network-engineer-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/google.webp" alt="google cloud" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">GCP<span class="dots"></span><span>Professional</span></h6>
                                                                        <h6 class="desc2">Google Professional Cloud Network Engineer</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/google-professional-cloud-security-engineer-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/google.webp" alt="google cloud" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">GCP<span class="dots"></span><span>Professional</span></h6>
                                                                        <h6 class="desc2">Google Professional Cloud Security Engineer</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/google-professional-cloud-data-engineer-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/google.webp" alt="google cloud" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">GCP<span class="dots"></span><span>Professional</span></h6>
                                                                        <h6 class="desc2">Google Professional Cloud Data Engineer</h6>
                                                                        <div class="seller new">New</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Google Cloud Courses</button>
                                                            </div>
                                                        </div>

                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Authorized Training & Certification Exam Center</h5>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/redhat.webp" alt="Red Hat" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Red Hat</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p> EC-Council</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/offsec.webp" alt="OffSec" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>OffSec</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/aws.webp" alt="aws" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>AWS Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/azure.webp" alt="Azure" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Microsoft Azure</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/google.webp" alt="Google Cloud" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Google Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/cisco.webp" alt="cisco" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Cisco</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/vmware.webp" alt="vmware" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>VMware</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/oracle.webp" alt="Oracle" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Oracle</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/linux.webp" alt="The Linux Foundation" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>The Linux Foundation</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/comptia.webp" alt="Comptia" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Comptia</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-network" role="tabpanel" aria-labelledby="pills-network-tab" tabindex="0">
                                                    <div class="course-tabs-wraper">

                                                        <div class="course-tabs-row scrollbar-inner">
                                                            <div class="column w-100">
                                                                <div class="nav-card">
                                                                    <div class="icon-img">
                                                                        <img src="assets/img/icons/devops.webp" alt="DevOps" />
                                                                    </div>
                                                                    <div class="info-width">
                                                                        <div class="info">
                                                                            <h4>DevOps Training & Certifications</h4>
                                                                            <p>Industry-leading certifications in DevOps practices, including CI/CD, containerization, orchestration, configuration management, and infrastructure as code.</p>
                                                                        </div>
                                                                        <a href="https://training.webasha.com/devops" class="btn-view text-decoration-none">View All DevOps Courses</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="column">
                                                                <h5>Jenkins Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/jenkins-fundamentals" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/jenkins.webp" alt="jenkins" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Jenkins<span class="dots"></span><span>Beginner</span></h6>
                                                                        <h6 class="desc2">Jenkins CI/CD Fundamentals</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/jenkins-advanced" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/jenkins.webp" alt="jenkins" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Jenkins<span class="dots"></span><span>Advanced</span></h6>
                                                                        <h6 class="desc2">Advanced Jenkins Pipeline Development</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Jenkins Courses</button>
                                                            </div>
                                                            <div class="column">
                                                                <h5>Docker Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/docker-essentials" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/docker.webp" alt="docker" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Docker<span class="dots"></span><span>Essentials</span></h6>
                                                                        <h6 class="desc2">Docker Containerization Essentials</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/docker-certified-associate" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/docker.webp" alt="docker" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Docker<span class="dots"></span><span>DCA</span></h6>
                                                                        <h6 class="desc2">Docker Certified Associate (DCA)</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Docker Courses</button>
                                                            </div>
                                                            <div class="column">
                                                                <h5>Kubernetes Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/certified-kubernetes-administrator-cka-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/kubernetes.webp" alt="kubernetes" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Kubernetes<span class="dots"></span><span>CKA</span></h6>
                                                                        <h6 class="desc2">Certified Kubernetes Administrator (CKA)</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
																<a href="https://training.webasha.com/certified-kubernetes-administrator-cka-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/kubernetes.webp" alt="kubernetes" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Kubernetes Application Developer<span class="dots"></span><span>CKAD</span></h6>
                                                                        <h6 class="desc2">Certified Kubernetes Application Developer (CKAD)</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/certified-kubernetes-security-specialist-cks-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/kubernetes.webp" alt="kubernetes" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Kubernetes<span class="dots"></span><span>CKS</span></h6>
                                                                        <h6 class="desc2">Certified Kubernetes Security Specialist (CKS)</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Kubernetes Courses</button>
                                                            </div>
                                                            <div class="column">
                                                                <h5>Ansible Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/ansible-essentials" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ansible.webp" alt="ansible" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Ansible<span class="dots"></span><span>Essentials</span></h6>
                                                                        <h6 class="desc2">Ansible Configuration Management Essentials</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/ansible-advanced" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ansible.webp" alt="ansible" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Ansible<span class="dots"></span><span>Advanced</span></h6>
                                                                        <h6 class="desc2">Advanced Ansible Automation</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Ansible Courses</button>
                                                            </div>
                                                            <div class="column">
                                                                <h5>Terraform Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/terraform-associate" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/terraform.webp" alt="terraform" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Terraform<span class="dots"></span><span>Associate</span></h6>
                                                                        <h6 class="desc2">HashiCorp Certified: Terraform Associate</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/terraform-advanced" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/terraform.webp" alt="terraform" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Terraform<span class="dots"></span><span>Advanced</span></h6>
                                                                        <h6 class="desc2">Advanced Terraform for Infrastructure as Code</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Terraform Courses</button>
                                                            </div>
                                                        </div>
                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Authorized Training & Certification Exam Center</h5>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/redhat.webp" alt="Red Hat" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Red Hat</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p> EC-Council</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/offsec.webp" alt="OffSec" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>OffSec</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/aws.webp" alt="aws" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>AWS Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/azure.webp" alt="Azure" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Microsoft Azure</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/google.webp" alt="Google Cloud" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Google Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/cisco.webp" alt="cisco" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Cisco</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/vmware.webp" alt="vmware" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>VMware</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/oracle.webp" alt="Oracle" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Oracle</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/linux.webp" alt="The Linux Foundation" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>The Linux Foundation</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/comptia.webp" alt="Comptia" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Comptia</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-prog-db" role="tabpanel" aria-labelledby="pills-prog-db-tab" tabindex="0">
                                                    <div class="course-tabs-wraper">

                                                        <div class="course-tabs-row scrollbar-inner">
                                                            <div class="column w-100">
                                                                <div class="nav-card">
                                                                    <div class="icon-img">
                                                                        <img src="assets/img/icons/programming.webp" alt="Programming" />
                                                                    </div>
                                                                    <div class="info-width">
                                                                        <div class="info">
                                                                            <h4>Programming & Databases Training & Certifications</h4>
                                                                            <p>Industry-leading certifications in programming languages like Python, database systems such as Oracle and SQL, and big data technologies.</p>
                                                                        </div>
                                                                        <a href="https://training.webasha.com/programming-databases" class="btn-view text-decoration-none">View All Programming & Databases Courses</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="column">
                                                                <h5>Python Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/python-fundamentals" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/python.webp" alt="python" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Python<span class="dots"></span><span>Beginner</span></h6>
                                                                        <h6 class="desc2">Python Programming Fundamentals</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/python-advanced" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/python.webp" alt="python" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Python<span class="dots"></span><span>Advanced</span></h6>
                                                                        <h6 class="desc2">Advanced Python for Data Science</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Python Courses</button>
                                                            </div>
                                                            <div class="column">
                                                                <h5>Oracle Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/oracle-database-admin" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/oracle.webp" alt="oracle" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Oracle<span class="dots"></span><span>1Z0-082</span></h6>
                                                                        <h6 class="desc2">Oracle Database Administration I</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/oracle-pl-sql" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/oracle.webp" alt="oracle" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Oracle<span class="dots"></span><span>1Z0-144</span></h6>
                                                                        <h6 class="desc2">Oracle Database SQL & PL/SQL</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Oracle Courses</button>
                                                            </div>
                                                            <div class="column">
                                                                <h5>SQL Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/sql-fundamentals" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/sql.webp" alt="sql" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">SQL<span class="dots"></span><span>Beginner</span></h6>
                                                                        <h6 class="desc2">SQL Fundamentals for Beginners</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/advanced-sql" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/sql.webp" alt="sql" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">SQL<span class="dots"></span><span>Advanced</span></h6>
                                                                        <h6 class="desc2">Advanced SQL Query Optimization</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all SQL Courses</button>
                                                            </div>
                                                            <div class="column">
                                                                <h5>Big Data Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/hadoop-fundamentals" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/big-data.webp" alt="big data" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Big Data<span class="dots"></span><span>Hadoop</span></h6>
                                                                        <h6 class="desc2">Hadoop Fundamentals & Administration</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/spark-developer" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/big-data.webp" alt="big data" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Big Data<span class="dots"></span><span>Spark</span></h6>
                                                                        <h6 class="desc2">Apache Spark Developer Certification</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Big Data Courses</button>
                                                            </div>
                                                        </div>
                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Authorized Training & Certification Exam Center</h5>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/redhat.webp" alt="Red Hat" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Red Hat</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p> EC-Council</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/offsec.webp" alt="OffSec" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>OffSec</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/aws.webp" alt="aws" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>AWS Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/azure.webp" alt="Azure" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Microsoft Azure</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/google.webp" alt="Google Cloud" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Google Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/cisco.webp" alt="cisco" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Cisco</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/vmware.webp" alt="vmware" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>VMware</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/oracle.webp" alt="Oracle" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Oracle</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/linux.webp" alt="The Linux Foundation" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>The Linux Foundation</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/comptia.webp" alt="Comptia" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Comptia</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-ai-ml" role="tabpanel" aria-labelledby="pills-ai-ml-tab" tabindex="0">
                                                    <div class="course-tabs-wraper">

                                                        <div class="course-tabs-row scrollbar-inner">
                                                            <div class="column w-100">
                                                                <div class="nav-card">
                                                                    <div class="icon-img">
                                                                        <img src="assets/img/icons/ai-ml.webp" alt="AI ML" />
                                                                    </div>
                                                                    <div class="info-width">
                                                                        <div class="info">
                                                                            <h4>AI, ML & Data Analytics Training & Certifications</h4>
                                                                            <p>Industry-leading certifications in artificial intelligence, machine learning, data analytics, and data science across major providers.</p>
                                                                        </div>
                                                                        <a href="https://training.webasha.com/ai-ml-data" class="btn-view text-decoration-none">View All AI, ML & Data Courses</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="column">
                                                                <h5>AI Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/ai-fundamentals" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ai.webp" alt="ai" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Google<span class="dots"></span><span>Essentials</span></h6>
                                                                        <h6 class="desc2">Google AI Essentials</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/azure-ai-fundamentals" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ai.webp" alt="ai" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Azure<span class="dots"></span><span>AI-900</span></h6>
                                                                        <h6 class="desc2">Microsoft Certified: Azure AI Fundamentals</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all AI Courses</button>
                                                            </div>
                                                            <div class="column">
                                                                <h5>Machine Learning Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/aws-ml-specialty" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ml.webp" alt="ml" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">AWS<span class="dots"></span><span>MLS-C01</span></h6>
                                                                        <h6 class="desc2">AWS Certified Machine Learning - Specialty</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/gcp-ml-engineer" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/ml.webp" alt="ml" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">GCP<span class="dots"></span><span>Professional</span></h6>
                                                                        <h6 class="desc2">Google Professional Machine Learning Engineer</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Machine Learning Courses</button>
                                                            </div>
                                                            <div class="column">
                                                                <h5>Data Analytics Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/google-data-analytics" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/data-analytics.webp" alt="data analytics" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Google<span class="dots"></span><span>Certificate</span></h6>
                                                                        <h6 class="desc2">Google Data Analytics Certificate</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/power-bi-data-analyst" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/data-analytics.webp" alt="data analytics" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Microsoft<span class="dots"></span><span>PL-300</span></h6>
                                                                        <h6 class="desc2">Microsoft Certified: Power BI Data Analyst Associate</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Data Analytics Courses</button>
                                                            </div>
                                                            <div class="column">
                                                                <h5>Data Science Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/ibm-data-science" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/data-science.webp" alt="data science" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">IBM<span class="dots"></span><span>Professional</span></h6>
                                                                        <h6 class="desc2">IBM Data Science Professional Certificate</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/azure-data-scientist" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/data-science.webp" alt="data science" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Azure<span class="dots"></span><span>DP-100</span></h6>
                                                                        <h6 class="desc2">Microsoft Certified: Azure Data Scientist Associate</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Data Science Courses</button>
                                                            </div>
                                                        </div>
                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Authorized Training & Certification Exam Center</h5>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/redhat.webp" alt="Red Hat" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Red Hat</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p> EC-Council</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/offsec.webp" alt="OffSec" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>OffSec</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/aws.webp" alt="aws" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>AWS Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/azure.webp" alt="Azure" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Microsoft Azure</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/google.webp" alt="Google Cloud" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Google Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/cisco.webp" alt="cisco" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Cisco</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/vmware.webp" alt="vmware" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>VMware</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/oracle.webp" alt="Oracle" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Oracle</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/linux.webp" alt="The Linux Foundation" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>The Linux Foundation</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/comptia.webp" alt="Comptia" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Comptia</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-web-digital" role="tabpanel" aria-labelledby="pills-web-digital-tab" tabindex="0">
                                                    <div class="course-tabs-wraper">

                                                        <div class="course-tabs-row scrollbar-inner">
                                                            <div class="column w-100">
                                                                <div class="nav-card">
                                                                    <div class="icon-img">
                                                                        <img src="assets/img/icons/web-digital.webp" alt="Web Digital" />
                                                                    </div>
                                                                    <div class="info-width">
                                                                        <div class="info">
                                                                            <h4>Web & Digital Skills Training & Certifications</h4>
                                                                            <p>Industry-leading certifications in full stack development, web technologies, digital marketing, graphic design, and UI/UX.</p>
                                                                        </div>
                                                                        <a href="https://training.webasha.com/web-digital" class="btn-view text-decoration-none">View All Web & Digital Courses</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="column">
                                                                <h5>Full Stack Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/full-stack-developer" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/full-stack.webp" alt="full stack" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">MERN<span class="dots"></span><span>Bootcamp</span></h6>
                                                                        <h6 class="desc2">Full Stack Web Development with MERN</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/mean-stack" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/full-stack.webp" alt="full stack" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">MEAN<span class="dots"></span><span>Bootcamp</span></h6>
                                                                        <h6 class="desc2">Full Stack Web Development with MEAN</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Full Stack Courses</button>
                                                            </div>
                                                            <div class="column">
                                                                <h5>Web Tech Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/html-css-js" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/web-tech.webp" alt="web tech" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Frontend<span class="dots"></span><span>Essentials</span></h6>
                                                                        <h6 class="desc2">HTML, CSS & JavaScript Fundamentals</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/react-js" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/web-tech.webp" alt="web tech" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">React<span class="dots"></span><span>Advanced</span></h6>
                                                                        <h6 class="desc2">Advanced React.js Development</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Web Tech Courses</button>
                                                            </div>
                                                            <div class="column">
                                                                <h5>Digital Marketing Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/seo-specialist" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/digital-marketing.webp" alt="digital marketing" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Google<span class="dots"></span><span>Certificate</span></h6>
                                                                        <h6 class="desc2">Google Digital Marketing & E-commerce Certificate</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/social-media-marketing" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/digital-marketing.webp" alt="digital marketing" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Meta<span class="dots"></span><span>Certificate</span></h6>
                                                                        <h6 class="desc2">Meta Social Media Marketing Professional Certificate</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Digital Marketing Courses</button>
                                                            </div>
                                                            <div class="column">
                                                                <h5>Graphic Design Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/adobe-illustrator" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/graphic-design.webp" alt="graphic design" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Adobe<span class="dots"></span><span>Certified</span></h6>
                                                                        <h6 class="desc2">Adobe Certified Professional in Graphic Design & Illustration using Adobe Illustrator</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/ui-ux-design" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/graphic-design.webp" alt="graphic design" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Google<span class="dots"></span><span>Certificate</span></h6>
                                                                        <h6 class="desc2">Google UX Design Professional Certificate</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Graphic Design Courses</button>
                                                            </div>
                                                        </div>
                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Authorized Training & Certification Exam Center</h5>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/redhat.webp" alt="Red Hat" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Red Hat</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p> EC-Council</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/offsec.webp" alt="OffSec" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>OffSec</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/aws.webp" alt="aws" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>AWS Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/azure.webp" alt="Azure" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Microsoft Azure</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/google.webp" alt="Google Cloud" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Google Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/cisco.webp" alt="cisco" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Cisco</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/vmware.webp" alt="vmware" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>VMware</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/oracle.webp" alt="Oracle" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Oracle</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/linux.webp" alt="The Linux Foundation" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>The Linux Foundation</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/comptia.webp" alt="Comptia" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Comptia</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-corp-career" role="tabpanel" aria-labelledby="pills-corp-career-tab" tabindex="0">
                                                    <div class="course-tabs-wraper">

                                                        <div class="course-tabs-row scrollbar-inner">
                                                            <div class="column w-100">
                                                                <div class="nav-card">
                                                                    <div class="icon-img">
                                                                        <img src="assets/img/icons/corporate-career.webp" alt="Corporate Career" />
                                                                    </div>
                                                                    <div class="info-width">
                                                                        <div class="info">
                                                                            <h4>Corporate & Career Training Programs</h4>
                                                                            <p>Comprehensive programs for soft skills development, internships, job-oriented training, and career advancement in professional environments.</p>
                                                                        </div>
                                                                        <a href="https://training.webasha.com/corporate-career" class="btn-view text-decoration-none">View All Corporate & Career Programs</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="column">
                                                                <h5>Soft Skills Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/communication-skills" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/soft-skills.webp" alt="soft skills" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Soft Skills<span class="dots"></span><span>Essentials</span></h6>
                                                                        <h6 class="desc2">Effective Communication & Presentation Skills</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/leadership-training" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/soft-skills.webp" alt="soft skills" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Soft Skills<span class="dots"></span><span>Advanced</span></h6>
                                                                        <h6 class="desc2">Leadership & Team Management</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Soft Skills Programs</button>
                                                            </div>
                                                            <div class="column">
                                                                <h5>Internships Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/summer-internship" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/internship.webp" alt="internship" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Internship<span class="dots"></span><span>Summer</span></h6>
                                                                        <h6 class="desc2">Summer Internship Program</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/6-months-internship" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/internship.webp" alt="internship" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Internship<span class="dots"></span><span>6 Months</span></h6>
                                                                        <h6 class="desc2">6 Months Industrial Internship</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Internships Programs</button>
                                                            </div>
                                                            <div class="column">
                                                                <h5>Job-Oriented Programs Track</h5>
                                                                <hr>
                                                                <a href="https://training.webasha.com/job-guarantee-program" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/job-oriented.webp" alt="job oriented" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Job-Oriented<span class="dots"></span><span>Guarantee</span></h6>
                                                                        <h6 class="desc2">Job Guarantee Bootcamp</h6>
                                                                        <div class="seller">Best Seller</div>
                                                                    </div>
                                                                </a>
                                                                <a href="https://training.webasha.com/career-development" class="course-link text-decoration-none">
                                                                    <div class="image-icon">
                                                                        <img src="assets/img/icons/job-oriented.webp" alt="job oriented" />
                                                                    </div>
                                                                    <div class="info">
                                                                        <h6 class="desc1 flex-desc">Job-Oriented<span class="dots"></span><span>Career</span></h6>
                                                                        <h6 class="desc2">Career Development & Placement Training</h6>
                                                                        <div class="seller trending">Trending</div>
                                                                    </div>
                                                                </a>
                                                                <button class="btn btn-view d-block mx-auto">View all Job-Oriented Programs</button>
                                                            </div>
                                                        </div>
                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Authorized Training & Certification Exam Center</h5>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/redhat.webp" alt="Red Hat" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Red Hat</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p> EC-Council</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/offsec.webp" alt="OffSec" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>OffSec</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/aws.webp" alt="aws" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>AWS Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/azure.webp" alt="Azure" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Microsoft Azure</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/google.webp" alt="Google Cloud" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Google Cloud</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/cisco.webp" alt="cisco" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Cisco</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/vmware.webp" alt="vmware" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>VMware</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/oracle.webp" alt="Oracle" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Oracle</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/linux.webp" alt="The Linux Foundation" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>The Linux Foundation</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-wraper">
                                                                        <div class="icon-img">
                                                                            <img src="assets/img/icons/comptia.webp" alt="Comptia" />
                                                                        </div>
                                                                        <div class="info">
                                                                            <p>Comptia</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Search Bar: Input for searching courses -->
                <div class="search">
                    <input class="form-control" type="search" placeholder="Course title or keyword" aria-label="Search">
                    <button class="btn btn-search"><img src="assets/imgs/search.png" alt="search" /></button>
                </div>
            </div>
            <!-- Navbar Toggler: Button for mobile menu toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Collapse: Collapsible part of navbar for links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar Nav: List of navigation items -->
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <!-- Dropdown: Top Certifications -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTopCert" data-bs-toggle="dropdown" aria-expanded="false">
              Top Certifications
            </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownTopCert">
                            <!-- Redhat Certification Track -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Red Hat</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">RHCSA | EX200</a></li>
                                    <li><a class="dropdown-item" href="#">RHCE | EX294</a></li>
                                </ul>
                            </li>
                            <!-- Redhat Certification Track -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">OffSec</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">OSCP</a></li>
                                    <li><a class="dropdown-item" href="#">OSEP</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- Dropdown: Placement -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="placement" id="navbarDropdownPlacement" data-bs-toggle="dropdown" aria-expanded="false">
              Placement
            </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownPlacement">
                            <li><a class="dropdown-item" href="placed-students">Recently Placed Students</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">For Students</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="https://training.webasha.com/student-feedback">Student Feedback</a></li>
                                    <li><a class="dropdown-item" href="https://training.webasha.com/interview-question">Interview Questions</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Product Building</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Product Coaching</a></li>
                                    <li><a class="dropdown-item" href="#">Design Thinking Workshops</a></li>
                                    <li><a class="dropdown-item" href="#">Project to Product (Culture Shift)</a></li>
                                    <li><a class="dropdown-item" href="#">Product Development Training</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- Dropdown: Resources -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownResources" data-bs-toggle="dropdown" aria-expanded="false">
              Resources
            </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownResources">
                            <li><a class="dropdown-item" href="https://training.webasha.com/about-us">About us</a></li>
                            <li><a class="dropdown-item" href="https://www.webasha.com/blog/">Blog</a></li>
                            <li><a class="dropdown-item" href="https://training.webasha.com/career">Career</a></li>
                            <li><a class="dropdown-item" href="https://training.webasha.com/result">Result</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="https://training.webasha.com/internship">Internship</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="https://training.webasha.com/summer-training-in-pune">Summer Training</a></li>
                                    <li><a class="dropdown-item" href="https://training.webasha.com/winter-training">Winter Training</a></li>
                                    <li><a class="dropdown-item" href="https://training.webasha.com/6-weeks-internship">6 Weeks Internship</a></li>
                                    <li><a class="dropdown-item" href="https://training.webasha.com/6-months-internship">6 Months Internship</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="https://training.webasha.com/media">Media</a></li>
                            <li><a class="dropdown-item" href="https://training.webasha.com/gallery">Gallery</a></li>
                            <li><a class="dropdown-item" href="https://training.webasha.com/training-video">Training Video</a></li>
                        </ul>
                    </li>
                    <!-- Nav Item: Contact link -->
                    <li class="nav-item">
                        <a class="nav-link" href="https://training.webasha.com/contact-us">Contact</a>
                    </li>
                </ul>
                <!-- Enroll Button: Call to action button -->
                <div class="d-flex">
                    <button class="btn btn-primary btn-signup" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-controls="enquiryModal" aria-label="Enroll Now in Our Course">Enroll Now <i class="fa fa-arrow-right ms-2" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- Header-End: Marks the end of the header section -->



<!-- Mobile-Header-Start -->
<div class="mobile-header header">
    <div class="navbar">
        <div class="container">
            <div class="d-flex align-items-center gap-2">
                <button id="toggle-btn-1" class="open-btn"><i class="fa-solid fa-bars"></i></button>
                <a class="navbar-brand" href="/">
                    <img class="object-fit-contain" src="assets/imgs/logo.png" width="100" alt="logo" />
                </a>
            </div>
            <div class="d-flex course-dropdown">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" id="toggle-btn-2" type="button">
                        Courses
                    </button>
                </div>
                <div class="search">
                    <button class="btn btn-search" data-bs-toggle="modal" data-bs-target="#searchModal"><img src="assets/imgs/search.png" alt="search" /></button>
                </div>
            </div>
        </div>
        <div id="menu-1" class="menu">
            <div class="header-menu">
                <a class="navbar-brand" href="/">
                    <img class="object-fit-contain" src="assets/imgs/logo.png" width="100" alt="logo" />
                </a>
                <span id="close-btn-1" class="close-btn"><i class="fa-solid fa-xmark"></i></span>
            </div>
            <div class="accordion-wraper">
                <div class="accordion-main-menu scrollbar-inner">
                    <ul class="accordion list-unstyled mb-0" id="parentAccordion">
                        <li class="accordion-item accordion-drop">
                            <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                <i class="fa-solid fa-certificate"></i> Top Certifications
                                <span class="badge">New</span>
                            </a>
                            <ul id="collapse1" class="accordion-dropmenu mb-0 list-unstyled accordion-collapse collapse" data-bs-parent="#parentAccordion">
                                <li><a class="dropdown-item" href="#">Learning Solutions</a></li>
                                <li class="subaccordion">
                                    <ul class="accordion list-unstyled mb-0" id="childAccordion">
                                        <li class="accordion-item accordion-subdrop">
                                            <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse1.1" aria-expanded="true" aria-controls="collapse1.1">
                            Red Hat
                          </a>
                                            <ul id="collapse1.1" class="accordion-subdropmenu mb-0 list-unstyled accordion-collapse collapse" data-bs-parent="#childAccordion">
                                                <li><a class="dropdown-item" href="#">RHCSA | EX200</a></li>
                                                <li><a class="dropdown-item" href="#">RHCE | EX294</a></li>
                                            </ul>
                                        </li>
                                        <li class="accordion-item accordion-subdrop">
                                            <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse1.2" aria-expanded="true" aria-controls="collapse1.2">
                            OffSec
                          </a>
                                            <ul id="collapse1.2" class="accordion-subdropmenu mb-0 list-unstyled accordion-collapse collapse" data-bs-parent="#childAccordion">
                                                <li><a class="dropdown-item" href="#">OSCP</a></li>
                                                <li><a class="dropdown-item" href="#">OSEP</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="border-top my-2"></li>
                        <li class="accordion-item accordion-drop">
                            <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                <i class="fa-solid fa-trophy"></i> Placement
                                <!-- <span class="badge">New</span> -->
                            </a>
                            <ul id="collapse2" class="accordion-dropmenu mb-0 list-unstyled accordion-collapse collapse" data-bs-parent="#parentAccordion">
                                <li><a class="dropdown-item" href="https://training.webasha.com/placed-students">Recently Placed Students</a></li>
                                <li class="subaccordion">
                                    <ul class="accordion list-unstyled mb-0" id="childAccordion">
                                        <li class="accordion-item accordion-subdrop">
                                            <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse1.1" aria-expanded="true" aria-controls="collapse1.1">
                            For Students
                          </a>
                                            <ul id="collapse1.1" class="accordion-subdropmenu mb-0 list-unstyled accordion-collapse collapse" data-bs-parent="#childAccordion">
                                                <li><a class="dropdown-item" href="https://training.webasha.com/student-feedback">Student Feedback</a></li>
                                                <li><a class="dropdown-item" href="https://training.webasha.com/interview-question">Interview Questions</a></li>
                                            </ul>
                                        </li>
                                        <li class="accordion-item accordion-subdrop">
                                            <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse1.2" aria-expanded="true" aria-controls="collapse1.2">
                            Product Building
                          </a>
                                            <ul id="collapse1.2" class="accordion-subdropmenu mb-0 list-unstyled accordion-collapse collapse" data-bs-parent="#childAccordion">
                                                <li><a class="dropdown-item" href="#">Product Coaching</a></li>
                                                <li><a class="dropdown-item" href="#">Design Thinking Workshops</a></li>
                                                <li><a class="dropdown-item" href="#">Project to Product (Culture Shift)</a></li>
                                                <li><a class="dropdown-item" href="#">Product Development Training</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="border-top my-2"></li>
                        <li class="accordion-item accordion-drop">
                            <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                <i class="fa-solid fa-book-open-reader"></i> Resources
                                <!-- <span class="badge">New</span> -->
                            </a>
                            <ul id="collapse3" class="accordion-dropmenu mb-0 list-unstyled accordion-collapse collapse" data-bs-parent="#parentAccordion">
                                <li><a class="dropdown-item" href="https://training.webasha.com/about-us">About us</a></li>
                                <li><a class="dropdown-item" href="https://www.webasha.com/blog/">Blogs</a></li>
                                <li><a class="dropdown-item" href="https://training.webasha.com/career">Career</a></li>
                                <li><a class="dropdown-item" href="https://training.webasha.com/result">Result</a></li>
                                <li class="subaccordion">
                                    <ul class="accordion list-unstyled mb-0" id="childAccordion">
                                        <li class="accordion-item accordion-subdrop">
                                            <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse1.3" aria-expanded="true" aria-controls="collapse1.3">
                            Internship
                          </a>
                                            <ul id="collapse1.3" class="accordion-subdropmenu mb-0 list-unstyled accordion-collapse collapse" data-bs-parent="#childAccordion">
                                                <li><a class="dropdown-item" href="https://training.webasha.com/summer-training-in-pune">Summer Training</a></li>
                                                <li><a class="dropdown-item" href="https://training.webasha.com/winter-training">Winter Training</a></li>
                                                <li><a class="dropdown-item" href="https://training.webasha.com/6-weeks-internship">6 Weeks Internship</a></li>
                                                <li><a class="dropdown-item" href="https://training.webasha.com/6-months-internship">6 Months Internship</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li><a class="dropdown-item" href="https://training.webasha.com/media">Media</a></li>
                                <li><a class="dropdown-item" href="https://training.webasha.com/gallery">Gallery</a></li>
                                <li><a class="dropdown-item" href="https://training.webasha.com/training-video">Training Video</a></li>
                            </ul>
                        </li>
                        <li class="border-top my-2"></li>
                        <li class="accordion-item accordion-drop">
                            <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                <i class="fa-solid fa-address-card"></i> Contact
                            </a>
                            <ul id="collapse4" class="accordion-dropmenu list-unstyled accordion-collapse collapse" data-bs-parent="#parentAccordion">
                                <li><a class="dropdown-item" href="#">FAQs</a></li>
                                <li><a class="dropdown-item" href="#">Help</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <div class="footer-menu">
                    <div class="p-3">
                        <button class="btn btn-primary btn-signup w-100" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-controls="enquiryModal" aria-label="Enroll Now in Our Course">Enroll Now <i class="fa fa-arrow-right ms-2" aria-hidden="true" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Left Menu #1-End -->
        <!-- Right Menu #2: Course Goals and Categories -->
        <div id="menu-2" class="menu menu-2">
            <div class="header-menu">
                <a class="navbar-brand" href="/">
                    <img class="object-fit-contain" src="assets/imgs/logo.png" width="100" alt="logo" />
                </a>
                <span id="close-btn-2" class="close-btn"><i class="fa-solid fa-xmark"></i></span>
            </div>
            <div class="course-dropdown">
                <div class="dropdown-menu d-block position-static">
                    <div class="container">
                        <div class="course-dropdown-wraper">
                            <div class="course-tabs-container scrollbar-inner">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li>
                                        <h4>Goals</h4></li>
                                    <li class="nav-item" role="presentation">
                                        <button class="active" id="pills-01-tab" data-bs-toggle="pill" data-bs-target="#pills-01" type="button" role="tab" aria-controls="pills-01" aria-selected="true" onclick="showContent()">
                                            <i class="fa-solid fa-certificate"></i> Get a Job
                                        </button>
                                    </li>
                                    <li>
                                        <h4>Domains</h4></li>
                                    <li class="nav-item" role="presentation">
                                        <button class="" id="pills-02-tab" data-bs-toggle="pill" data-bs-target="#pills-02" type="button" role="tab" aria-controls="pills-02" aria-selected="false" onclick="showContent()">
                                            <i class="fa-solid fa-briefcase"></i> Red Hat
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="" id="pills-03-tab" data-bs-toggle="pill" data-bs-target="#pills-03" type="button" role="tab" aria-controls="pills-03" aria-selected="false" onclick="showContent()">
                                            <i class="fa-solid fa-clock"></i> Cybersecurity & Ethical Hacking - EC-Council
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="" id="pills-04-tab" data-bs-toggle="pill" data-bs-target="#pills-04" type="button" role="tab" aria-controls="pills-04" aria-selected="false" onclick="showContent()">
                                            <i class="fa-solid fa-shield-alt"></i> Cybersecurity & Ethical Hacking - OffSec
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="" id="pills-05-tab" data-bs-toggle="pill" data-bs-target="#pills-05" type="button" role="tab" aria-controls="pills-05" aria-selected="false" onclick="showContent()">
                                            <i class="fa-solid fa-server"></i> Networking & Infrastructure (Cisco, VMware, Veritas)
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="" id="pills-06-tab" data-bs-toggle="pill" data-bs-target="#pills-06" type="button" role="tab" aria-controls="pills-06" aria-selected="false" onclick="showContent()">
                                            <i class="fa-solid fa-cloud"></i> Cloud (AWS, Azure, GCP)
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="" id="pills-07-tab" data-bs-toggle="pill" data-bs-target="#pills-07" type="button" role="tab" aria-controls="pills-07" aria-selected="false" onclick="showContent()">
                                            <i class="fa-solid fa-network-wired"></i> DevOps (Docker, Kubernetes)
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="" id="pills-08-tab" data-bs-toggle="pill" data-bs-target="#pills-08" type="button" role="tab" aria-controls="pills-08" aria-selected="false" onclick="showContent()">
                                            <i class="fa-solid fa-database"></i> Programming & Databases (Python, Oracle, SQL, Big Data)
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="" id="pills-09-tab" data-bs-toggle="pill" data-bs-target="#pills-09" type="button" role="tab" aria-controls="pills-09" aria-selected="false" onclick="showContent()">
                                            <i class="fa-solid fa-brain"></i> AI, ML & Data Science
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="" id="pills-10-tab" data-bs-toggle="pill" data-bs-target="#pills-10" type="button" role="tab" aria-controls="pills-10" aria-selected="false" onclick="showContent()">
                                            <i class="fa-solid fa-globe"></i> Web & Digital Skills (Full Stack, Web Tech, Digital Marketing, Graphic Design)
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="" id="pills-11-tab" data-bs-toggle="pill" data-bs-target="#pills-11" type="button" role="tab" aria-controls="pills-11" aria-selected="false" onclick="showContent()">
                                            <i class="fa-solid fa-users"></i> Corporate & Career Training (Soft Skills, Internships, Job-Oriented Programs)
                                        </button>
                                    </li>
                                </ul>
                                <button class="btn btn-all-domains"><span>Browse All Domains</span> <i class="fa-solid fa-arrow-up"></i></button>
                            </div>
                            <!-- Tab Content Start -->
                            <div class="course-tabs-content" id="myDIV">
                                <div class="course-tabs-card">
                                    <div class="course-tabs-scrollbar">
                                        <button class="btn btn-primary back-menu-btn mt-2 ms-2" onclick="hideContent()">
                                            <i class="fa-solid fa-arrow-left me-2"></i> Back to Menu
                                        </button>
                                        <div class="tab-content" id="pills-tabContent">
                                            <!-- Get a Job Tab Content -->
                                            <div class="tab-pane fade show active" id="pills-01" role="tabpanel" aria-labelledby="pills-01-tab" tabindex="0">
                                                <div class="course-tabs-wraper">
                                                    <div class="course-tabs-row scrollbar-inner">
                                                        <div class="column w-100">
                                                            <div class="nav-card">
                                                                <div class="icon-img">
                                                                    <img src="assets/img/icons/job.webp" alt="Job Oriented Course" />
                                                                </div>
                                                                <div class="info-width">
                                                                    <div class="info">
                                                                        <h4>Our Job Oriented Programs in 6 Domains</h4>
                                                                        <p>Hands-on programs designed to prepare you for in-demand IT jobs with practical skills and certifications. Open to anyone with interest in tech field (except where noted).</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Cloud Admin</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/#" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/cloud.webp" alt="cloud" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Cloud Admin<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Job-Oriented Program in Cloud Administration</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>DevOps Engineer</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/#" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/devops.webp" alt="devops" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">DevOps Engineer<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">Job-Oriented Program in DevOps Engineering</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Cyber Security</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/#" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/cybersecurity.webp" alt="cybersecurity" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Cyber Security<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">Job-Oriented Program in Cyber Security</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Cyber Security with Advance Pen Tester</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/#" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/cybersecurity.webp" alt="cybersecurity" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Cyber Security<span class="dots"></span><span>12 Months</span></h6>
                                                                    <h6 class="desc2">Job-Oriented Program in Cyber Security with Advanced Penetration Testing</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Data Science with AI/ML</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/#" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/data-science.webp" alt="data science" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Data Science<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Job-Oriented Program in Data Science with AI/ML</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Full Stack with Python</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/#" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/full-stack.webp" alt="full stack" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Full Stack<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Job-Oriented Program in Full Stack with Python (Computer Background Required)</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Interview Peparation</h5>
                                                                    <ul class="more-domains-list learn-more-gap list-unstyled flex-column">
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">Python Tutorial<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">What is Cloud Computing? A Beginner's Guide<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end tab of Get Job -->

                                            <div class="tab-pane fade" id="pills-02" role="tabpanel" aria-labelledby="pills-02-tab" tabindex="0">
                                                <div class="course-tabs-wraper">
                                                    <div class="course-tabs-row scrollbar-inner">
                                                        <div class="column w-100">
                                                            <div class="nav-card">
                                                                <div class="icon-img">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info-width">
                                                                    <div class="info">
                                                                        <h4>Red Hat Training & Certifications</h4>
                                                                        <p>Performance-based certifications and training for Linux, cloud, automation, security, and development.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Core System Administration Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/rhcsa1" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">RHCSA I<span class="dots"></span><span>RH124v10</span></h6>
                                                                    <h6 class="desc2">Red Hat Certified System Administrator (RHCSA) I</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/rhcsa2" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">RHCSA II<span class="dots"></span><span>RH134v10</span></h6>
                                                                    <h6 class="desc2">Red Hat Certified System Administrator (RHCSA) II</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/redhat-linux-rhcsa-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">RHCSA RH199<span class="dots"></span><span>EX200v10</span></h6>
                                                                    <h6 class="desc2">Red Hat Certified System Administrator (RHCSA)</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/rhce" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">RHCE RH294<span class="dots"></span><span>EX294</span></h6>
                                                                    <h6 class="desc2">Red Hat Certified Engineer (RHCE)</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/linux-automation-training-rh294" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Ansible Automation<span class="dots"></span><span>RH294</span></h6>
                                                                    <h6 class="desc2">Red Hat Certified Specialist in Ansible Automation</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/red-hat-satellite-administration-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Satellite Administration<span class="dots"></span><span>EX403</span></h6>
                                                                    <h6 class="desc2">Red Hat Satellite 6 Administration</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/rh436" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">High Availability Clustering<span class="dots"></span><span>EX436</span></h6>
                                                                    <h6 class="desc2">Red Hat Certified Specialist in High Availability Clustering</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>OpenShift Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/containers-kubernetes-red-hat-openshift-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Containers with Podman<span class="dots"></span><span>EX188</span></h6>
                                                                    <h6 class="desc2">Introduction to Containers with Podman</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/openshift" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">OpenShift Administration II<span class="dots"></span><span>EX280</span></h6>
                                                                    <h6 class="desc2">Red Hat OpenShift Administration II (Configuring a production cluster)</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/red-hat-openshift-virtualization" class="course-link text-decoration-none" aria-label="DO316 Managing VMs with OpenShift Virtualization">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">OpenShift AI<span class="dots"></span><span>EX267</span></h6>
                                                                    <h6 class="desc2">Developing and Deploying AI/ML Applications on Red Hat OpenShift AI</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/red-hat-openshift-virtualization" class="course-link text-decoration-none" aria-label="DO316 Managing VMs with OpenShift Virtualization">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">OpenShift Virtualization<span class="dots"></span><span>EX316</span></h6>
                                                                    <h6 class="desc2">Managing Virtual Machines with Red Hat OpenShift Virtualization</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/red-hat-openshift-advanced" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">OpenShift Administration III<span class="dots"></span><span>EX380</span></h6>
                                                                    <h6 class="desc2">Red Hat OpenShift Administration III / Automation & Integration (advanced admin/automation topics)</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/red-hat-openshift-advanced" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Securing Kubernetes<span class="dots"></span><span>EX430</span></h6>
                                                                    <h6 class="desc2">Securing Kubernetes Clusters with Red Hat Advanced Cluster Security</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/red-hat-openshift-advanced" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Multicluster Management<span class="dots"></span><span>EX480</span></h6>
                                                                    <h6 class="desc2">Multicluster Management with Red Hat OpenShift — multi-cluster operations & platform management</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Developer Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/red-hat-rhcjd" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">RHCJD<span class="dots"></span><span>DO101 + AD183</span></h6>
                                                                    <h6 class="desc2">Red Hat Certified Enterprise Application Developer (RHCJD)</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/red-hat-rhcemd" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">RHCEMD<span class="dots"></span><span>DO283 + AD248</span></h6>
                                                                    <h6 class="desc2">Red Hat Certified Enterprise Microservices Developer (RHCEMD)</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/containers-kubernetes-red-hat-openshift-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Containers and Kubernetes<span class="dots"></span><span>DO180</span></h6>
                                                                    <h6 class="desc2">Red Hat Certified Specialist in Containers and Kubernetes</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Cloud and Virtualization Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/redhat-openstack-cl110-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">OpenStack Administrator<span class="dots"></span><span>PE110</span></h6>
                                                                    <h6 class="desc2">Red Hat Certified System Administrator in Red Hat OpenStack</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/open-stack" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">OpenStack Engineer<span class="dots"></span><span>EX210</span></h6>
                                                                    <h6 class="desc2">Red Hat Certified Engineer in Red Hat OpenStack</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Security Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/red-hat-security-linux" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Security Linux<span class="dots"></span><span>EX415</span></h6>
                                                                    <h6 class="desc2">Red Hat Certified Specialist in Security: Linux</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/red-hat-identity-management" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Identity Management<span class="dots"></span><span>EX362</span></h6>
                                                                    <h6 class="desc2">Red Hat Certified Specialist in Identity Management</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/rh442" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Performance Tuning<span class="dots"></span><span>EX442</span></h6>
                                                                    <h6 class="desc2">Red Hat Certified Specialist in Performance Tuning</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Architect Level (RHCA)</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/#" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">RHCA Infrastructure<span class="dots"></span><span>Advanced</span></h6>
                                                                    <h6 class="desc2">RHCA - Infrastructure Track</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/#" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">RHCA Enterprise Apps<span class="dots"></span><span>Advanced</span></h6>
                                                                    <h6 class="desc2">RHCA - Enterprise Applications Track</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/#" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/redhat.webp" alt="red hat" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">RHCA DevOps<span class="dots"></span><span>Advanced</span></h6>
                                                                    <h6 class="desc2">RHCA - DevOps Track</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Interview Preparation</h5>
                                                                    <ul class="more-domains-list learn-more-gap list-unstyled flex-column">
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">Python Tutorial<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">What is Cloud Computing? A Beginner's Guide<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- end tab of Get Job -->
                                            <div class="tab-pane fade" id="pills-03" role="tabpanel" aria-labelledby="pills-03-tab" tabindex="0">
                                                <div class="course-tabs-wraper">
                                                    <div class="course-tabs-row scrollbar-inner">
                                                        <div class="column w-100">
                                                            <div class="nav-card">
                                                                <div class="icon-img">
                                                                    <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                </div>
                                                                <div class="info-width">
                                                                    <div class="info">
                                                                        <h4>EC-Council Training & Certifications</h4>
                                                                        <p>Globally recognized cybersecurity certifications focusing on ethical hacking, forensics, network defense, and more.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Ethical Hacking Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/ethical-hacking-ceh-cyber-security-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">CEH v13 AI<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Certified Ethical Hacker (CEH)</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/certified-ethical-hacker-ceh-practical-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">CEH v13 Practical<span class="dots"></span><span>4 Months</span></h6>
                                                                    <h6 class="desc2">Certified Ethical Hacker (CEH) Practical</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/ceh-master-training" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">CEH v13 Master<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">CEH v13 + Practical</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/ec-council-certified-security-analyst-ecsa-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">ECSA v10<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">EC-Council Certified Security Analyst (ECSA)</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/cpent-training" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">CPENT<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">Certified Penetration Testing Professional (CPENT)</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/licensed-penetration-tester-lpt-master-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">LPT<span class="dots"></span><span>12 Months</span></h6>
                                                                    <h6 class="desc2">Licensed Penetration Tester (LPT)</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Forensics Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/computer-hacking-forensic-investigator-chfi-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">CHFI v11<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Computer Hacking Forensic Investigator (CHFI)</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/ecih-training" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">ECIH<span class="dots"></span><span>4 Months</span></h6>
                                                                    <h6 class="desc2">EC-Council Certified Incident Handler (ECIH)</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                            <h5>Monitoring Work</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/soc-analyst-training" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">SOC Analyst v2<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Certified SOC Analyst (CSA)</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/certified-threat-intelligence-analyst-ctia-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">CTIA<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Certified Threat Intelligence Analyst (CTIA)</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Network Defense Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/certified-network-defender-cnd-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">CND<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Certified Network Defender (CND)</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Executive & Management Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/cciso-training" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">CCISO<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">Certified Chief Information Security Officer (CCISO)</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Other Specialists</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/vapt-training" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">VAPT<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Vulnerability Assessment and Penetration Testing (VAPT)</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/wapt-training" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">WAPT<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Web Application and Penetration Testing (WAPT)</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/cct-training" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">CCT<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Certified Cybersecurity Technician (CCT)</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/edrp-training" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ec.webp" alt="EC-Council" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">EDRP v3<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">EC-Council Disaster Recovery Professional (EDRP)</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Interview Preparation</h5>
                                                                    <ul class="more-domains-list learn-more-gap list-unstyled flex-column">
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">Python Tutorial<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">What is Cloud Computing? A Beginner's Guide<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end tab of Get Job -->
                                            <div class="tab-pane fade" id="pills-04" role="tabpanel" aria-labelledby="pills-04-tab" tabindex="0">
                                                <div class="course-tabs-wraper">
                                                    <div class="course-tabs-row scrollbar-inner">
                                                        <div class="column w-100">
                                                            <div class="nav-card">
                                                                <div class="icon-img">
                                                                    <img src="assets/img/icons/offsec.webp" alt="OffSec" />
                                                                </div>
                                                                <div class="info-width">
                                                                    <div class="info">
                                                                        <h4>OffSec Training & Certifications</h4>
                                                                        <p>Hands-on, performance-based certifications in offensive security, penetration testing, and exploit development.</p>
                                                                    </div>
                                                                    <a href="https://training.webasha.com/offsec" class="btn-view text-decoration-none">View All OffSec Courses</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Penetration Testing Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/offsec-oscp" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/offsec.webp" alt="Offsec">
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">OffSec<span class="dots"></span><span>PWK</span></h6>
                                                                    <h6 class="desc2">Offensive Security Certified Professional (OSCP)</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/offsec-osep" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/offsec.webp" alt="Offsec">
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">OffSec<span class="dots"></span><span>Evasion Techniques</span></h6>
                                                                    <h6 class="desc2">Offensive Security Experienced Penetration Tester (OSEP)</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                            <button class="btn btn-view d-block mx-auto">View all Penetration Testing Courses</button>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Exploit Development Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/offsec-osed" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/offsec.webp" alt="Offsec">
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">OffSec<span class="dots"></span><span>Windows User-Mode</span></h6>
                                                                    <h6 class="desc2">Offensive Security Exploit Developer (OSED)</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <button class="btn btn-view d-block mx-auto">View all Exploit Development Courses</button>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Web Attacks Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/offsec-oswe" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/offsec.webp" alt="Offsec">
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">OffSec<span class="dots"></span><span>AWAE</span></h6>
                                                                    <h6 class="desc2">Offensive Security Web Expert (OSWE)</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <button class="btn btn-view d-block mx-auto">View all Web Attacks Courses</button>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Defensive Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/offsec-osda" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/offsec.webp" alt="Offsec">
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">OffSec<span class="dots"></span><span>SOC-200</span></h6>
                                                                    <h6 class="desc2">Offensive Security Defensive Analyst (OSDA)</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                            <button class="btn btn-view d-block mx-auto">View all Defensive Courses</button>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Specialized Tracks</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/offsec-osmr" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/offsec.webp" alt="Offsec">
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">OffSec<span class="dots"></span><span>MacOS Control Bypass</span></h6>
                                                                    <h6 class="desc2">Offensive Security MacOS Researcher (OSMR)</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                            <button class="btn btn-view d-block mx-auto">View all Specialized Courses</button>
                                                        </div>
                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Interview Peparation</h5>
                                                                    <ul class="more-domains-list learn-more-gap list-unstyled flex-column">
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">Offsec Tutorial<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">What is Pentesting? A Beginner's Guide<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- end tab of Get Job -->
                                            <div class="tab-pane fade" id="pills-05" role="tabpanel" aria-labelledby="pills-05-tab" tabindex="0">
                                                <div class="course-tabs-wraper">
                                                    <div class="course-tabs-row scrollbar-inner">
                                                        <div class="column w-100">
                                                            <div class="nav-card">
                                                                <div class="icon-img">
                                                                    <img src="assets/img/icons/cisco.webp" alt="CISCO" />
                                                                </div>
                                                                <div class="info-width">
                                                                    <div class="info">
                                                                        <h4>Cisco Training & Certifications</h4>
                                                                        <p>Industry-leading certifications in networking, security, collaboration, data center, and software development.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Enterprise Networking Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/ccna" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/cisco.webp" alt="cisco" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">CCNA<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Cisco Certified Network Associate (CCNA)</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/ccnp" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/cisco.webp" alt="cisco" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">CCNP Enterprise<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">Cisco Certified Network Professional Enterprise (CCNP Enterprise)</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Security Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/ccnp-security" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/cisco.webp" alt="cisco" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">CCNP Security<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">Cisco Certified Network Professional Security (CCNP Security)</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Collaboration Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/ccnp-collaboration" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/cisco.webp" alt="cisco" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">CCNP Collaboration<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">Cisco Certified Network Professional Collaboration (CCNP Collaboration)</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Data Center Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/ccnp-data-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/cisco.webp" alt="cisco" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">CCNP Data Center<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">Cisco Certified Network Professional Data Center (CCNP Data Center)</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>DevNet Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/devnet-associate" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/cisco.webp" alt="cisco" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">DevNet Associate<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Cisco Certified DevNet Associate</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Interview Preparation</h5>
                                                                    <ul class="more-domains-list learn-more-gap list-unstyled flex-column">
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">Python Tutorial<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">What is Cloud Computing? A Beginner's Guide<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- end tab of Get Job -->
                                            <div class="tab-pane fade" id="pills-06" role="tabpanel" aria-labelledby="pills-06-tab" tabindex="0">
                                                <div class="course-tabs-wraper">
                                                    <div class="course-tabs-row scrollbar-inner">
                                                        <div class="column w-100">
                                                            <div class="nav-card">
                                                                <div class="icon-img">
                                                                    <img src="assets/img/icons/cloud.webp" alt="Cloud" />
                                                                </div>
                                                                <div class="info-width">
                                                                    <div class="info">
                                                                        <h4>Cloud Training & Certifications</h4>
                                                                        <p>Industry-leading certifications in cloud computing, architecture, security, development, and operations across major providers.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="column">
                                                            <h5>AWS Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/AWS-training-in-pune" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/aws.webp" alt="aws" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">AWS Training<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">AWS Training in Pune</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/aws-certified-cloud-practitioner-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/aws.webp" alt="aws" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">AWS Cloud Practitioner<span class="dots"></span><span>4 Months</span></h6>
                                                                    <h6 class="desc2">AWS Certified Cloud Practitioner</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/aws-solutions-architect-professional-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/aws.webp" alt="aws" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">AWS Solutions Architect<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">AWS Solutions Architect Professional</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/aws-certified-sysops-administrator-associate-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/aws.webp" alt="aws" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">AWS SysOps Administrator<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">AWS SysOps Administrator (Associate)</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/aws-certified-security-specialty-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/aws.webp" alt="aws" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">AWS Security Specialty<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">AWS Security Specialty</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Azure Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/microsoft-azure-fundamentals-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/azure.webp" alt="azure" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Azure Fundamentals<span class="dots"></span><span>4 Months</span></h6>
                                                                    <h6 class="desc2">Microsoft Azure Fundamentals</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/microsoft-azure-administrator-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/azure.webp" alt="azure" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Azure Administrator<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Microsoft Azure Administrator</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/microsoft-azure-architect-design-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/azure.webp" alt="azure" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Azure DevOps<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">Microsoft Azure DevOps</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/microsoft-azure-architect-technologies-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/azure.webp" alt="azure" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Azure Architect<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">Microsoft Azure Architect - Design</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/microsoft-azure-security-technologies-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/azure.webp" alt="azure" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Azure Security<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">Microsoft Azure Security Technologies</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Google Cloud Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/google-professional-cloud-architect-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/google.webp" alt="google cloud" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">GCP Cloud Architect<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">Google Professional Cloud Architect</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/google-professional-cloud-developer-architect-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/google.webp" alt="google cloud" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">GCP Cloud Developer<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Google Professional Cloud Developer</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/google-professional-cloud-network-engineer-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/google.webp" alt="google cloud" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">GCP Network Engineer<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Google Professional Cloud Network Engineer</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/google-professional-cloud-security-engineer-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/google.webp" alt="google cloud" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">GCP Security Engineer<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">Google Professional Cloud Security Engineer</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/google-professional-cloud-data-engineer-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/google.webp" alt="google cloud" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">GCP Data Engineer<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">Google Professional Cloud Data Engineer</h6>
                                                                    <div class="seller new">New</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Interview Preparation</h5>
                                                                    <ul class="more-domains-list learn-more-gap list-unstyled flex-column">
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">Python Tutorial<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">What is Cloud Computing? A Beginner's Guide<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- end tab of Get Job -->
                                            <div class="tab-pane fade" id="pills-07" role="tabpanel" aria-labelledby="pills-07-tab" tabindex="0">
                                                <div class="course-tabs-wraper">
                                                    <div class="course-tabs-row scrollbar-inner">
                                                        <div class="column w-100">
                                                            <div class="nav-card">
                                                                <div class="icon-img">
                                                                    <img src="assets/img/icons/devops.webp" alt="DevOps" />
                                                                </div>
                                                                <div class="info-width">
                                                                    <div class="info">
                                                                        <h4>DevOps Training & Certifications</h4>
                                                                        <p>Industry-leading certifications in DevOps practices, including CI/CD, containerization, orchestration, configuration management, and infrastructure as code.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Jenkins Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/jenkins-fundamentals" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/jenkins.webp" alt="jenkins" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Jenkins Fundamentals<span class="dots"></span><span>4 Months</span></h6>
                                                                    <h6 class="desc2">Jenkins CI/CD Fundamentals</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/jenkins-advanced" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/jenkins.webp" alt="jenkins" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Jenkins Advanced<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Advanced Jenkins Pipeline Development</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Docker Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/docker-essentials" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/docker.webp" alt="docker" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Docker Essentials<span class="dots"></span><span>4 Months</span></h6>
                                                                    <h6 class="desc2">Docker Containerization Essentials</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/docker-certified-associate" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/docker.webp" alt="docker" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Docker Certified Associate<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Docker Certified Associate (DCA)</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Kubernetes Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/certified-kubernetes-administrator-cka-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/kubernetes.webp" alt="kubernetes" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Kubernetes Administrator<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Certified Kubernetes Administrator (CKA)</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
															<a href="https://training.webasha.com/certified-kubernetes-application-developer-ckad-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/kubernetes.webp" alt="kubernetes" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Kubernetes Application Developer<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Certified Kubernetes Application Developer (CKAD)</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/certified-kubernetes-security-specialist-cks-online-training-institute-certification-exam-center" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/kubernetes.webp" alt="kubernetes" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Kubernetes Security<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">Certified Kubernetes Security Specialist (CKS)</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Ansible Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/ansible-essentials" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ansible.webp" alt="ansible" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Ansible Essentials<span class="dots"></span><span>4 Months</span></h6>
                                                                    <h6 class="desc2">Ansible Configuration Management Essentials</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/ansible-advanced" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ansible.webp" alt="ansible" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Ansible Advanced<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Advanced Ansible Automation</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Terraform Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/terraform-associate" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/terraform.webp" alt="terraform" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Terraform Associate<span class="dots"></span><span>4 Months</span></h6>
                                                                    <h6 class="desc2">HashiCorp Certified: Terraform Associate</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/terraform-advanced" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/terraform.webp" alt="terraform" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Terraform Advanced<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Advanced Terraform for Infrastructure as Code</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Interview Preparation</h5>
                                                                    <ul class="more-domains-list learn-more-gap list-unstyled flex-column">
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">Python Tutorial<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">What is Cloud Computing? A Beginner's Guide<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-08" role="tabpanel" aria-labelledby="pills-08-tab" tabindex="0">
                                                <div class="course-tabs-wraper">
                                                    <div class="course-tabs-row scrollbar-inner">
                                                        <div class="column w-100">
                                                            <div class="nav-card">
                                                                <div class="icon-img">
                                                                    <img src="assets/img/icons/programming.webp" alt="Programming" />
                                                                </div>
                                                                <div class="info-width">
                                                                    <div class="info">
                                                                        <h4>Programming & Databases Training & Certifications</h4>
                                                                        <p>Industry-leading certifications in programming languages like Python, database systems such as Oracle and SQL, and big data technologies.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Python Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/python-fundamentals" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/python.webp" alt="python" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Python Fundamentals<span class="dots"></span><span>4 Months</span></h6>
                                                                    <h6 class="desc2">Python Programming Fundamentals</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/python-advanced" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/python.webp" alt="python" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Python Advanced<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Advanced Python for Data Science</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Oracle Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/oracle-database-admin" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/oracle.webp" alt="oracle" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Oracle Database Admin<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Oracle Database Administration I</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/oracle-pl-sql" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/oracle.webp" alt="oracle" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Oracle SQL & PL/SQL<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Oracle Database SQL & PL/SQL</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>SQL Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/sql-fundamentals" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/sql.webp" alt="sql" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">SQL Fundamentals<span class="dots"></span><span>4 Months</span></h6>
                                                                    <h6 class="desc2">SQL Fundamentals for Beginners</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/advanced-sql" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/sql.webp" alt="sql" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">SQL Advanced<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Advanced SQL Query Optimization</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Big Data Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/hadoop-fundamentals" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/big-data.webp" alt="big data" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Hadoop Fundamentals<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Hadoop Fundamentals & Administration</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/spark-developer" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/big-data.webp" alt="big data" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Spark Developer<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">Apache Spark Developer Certification</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Interview Preparation</h5>
                                                                    <ul class="more-domains-list learn-more-gap list-unstyled flex-column">
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">Python Tutorial<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">What is Cloud Computing? A Beginner's Guide<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end tab of Get Job -->
                                            <div class="tab-pane fade" id="pills-09" role="tabpanel" aria-labelledby="pills-09-tab" tabindex="0">
                                                <div class="course-tabs-wraper">
                                                    <div class="course-tabs-row scrollbar-inner">
                                                        <div class="column w-100">
                                                            <div class="nav-card">
                                                                <div class="icon-img">
                                                                    <img src="assets/img/icons/ai-ml.webp" alt="AI ML" />
                                                                </div>
                                                                <div class="info-width">
                                                                    <div class="info">
                                                                        <h4>AI, ML & Data Analytics Training & Certifications</h4>
                                                                        <p>Industry-leading certifications in artificial intelligence, machine learning, data analytics, and data science across major providers.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="column">
                                                            <h5>AI Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/ai-fundamentals" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ai.webp" alt="ai" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Google AI Essentials<span class="dots"></span><span>4 Months</span></h6>
                                                                    <h6 class="desc2">Google AI Essentials</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/azure-ai-fundamentals" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ai.webp" alt="ai" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Azure AI Fundamentals<span class="dots"></span><span>4 Months</span></h6>
                                                                    <h6 class="desc2">Microsoft Certified: Azure AI Fundamentals</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Machine Learning Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/aws-ml-specialty" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ml.webp" alt="ml" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">AWS Machine Learning<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">AWS Certified Machine Learning - Specialty</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/gcp-ml-engineer" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/ml.webp" alt="ml" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">GCP Machine Learning<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">Google Professional Machine Learning Engineer</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Data Analytics Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/google-data-analytics" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/data-analytics.webp" alt="data analytics" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Google Data Analytics<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Google Data Analytics Certificate</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/power-bi-data-analyst" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/data-analytics.webp" alt="data analytics" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Power BI Data Analyst<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Microsoft Certified: Power BI Data Analyst Associate</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Data Science Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/ibm-data-science" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/data-science.webp" alt="data science" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">IBM Data Science<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">IBM Data Science Professional Certificate</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/azure-data-scientist" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/data-science.webp" alt="data science" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Azure Data Scientist<span class="dots"></span><span>8 Months</span></h6>
                                                                    <h6 class="desc2">Microsoft Certified: Azure Data Scientist Associate</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Interview Preparation</h5>
                                                                    <ul class="more-domains-list learn-more-gap list-unstyled flex-column">
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">Python Tutorial<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">What is Cloud Computing? A Beginner's Guide<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end tab of Get Job -->
                                            <div class="tab-pane fade" id="pills-10" role="tabpanel" aria-labelledby="pills-10-tab" tabindex="0">
                                                <div class="course-tabs-wraper">
                                                    <div class="course-tabs-row scrollbar-inner">
                                                        <div class="column w-100">
                                                            <div class="nav-card">
                                                                <div class="icon-img">
                                                                    <img src="assets/img/icons/web-digital.webp" alt="Web Digital" />
                                                                </div>
                                                                <div class="info-width">
                                                                    <div class="info">
                                                                        <h4>Web & Digital Skills Training & Certifications</h4>
                                                                        <p>Industry-leading certifications in full stack development, web technologies, digital marketing, graphic design, and UI/UX.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Full Stack Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/full-stack-developer" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/full-stack.webp" alt="full stack" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">MERN Stack<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Full Stack Web Development with MERN</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/mean-stack" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/full-stack.webp" alt="full stack" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">MEAN Stack<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Full Stack Web Development with MEAN</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Web Tech Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/html-css-js" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/web-tech.webp" alt="web tech" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Frontend Essentials<span class="dots"></span><span>4 Months</span></h6>
                                                                    <h6 class="desc2">HTML, CSS & JavaScript Fundamentals</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/react-js" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/web-tech.webp" alt="web tech" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">React Advanced<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Advanced React.js Development</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Digital Marketing Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/seo-specialist" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/digital-marketing.webp" alt="digital marketing" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Google Digital Marketing<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Google Digital Marketing & E-commerce Certificate</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/social-media-marketing" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/digital-marketing.webp" alt="digital marketing" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Meta Social Media<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Meta Social Media Marketing Professional Certificate</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Graphic Design Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/adobe-illustrator" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/graphic-design.webp" alt="graphic design" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Adobe Illustrator<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Adobe Certified Professional in Graphic Design & Illustration using Adobe Illustrator</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/ui-ux-design" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/graphic-design.webp" alt="graphic design" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Google UX Design<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Google UX Design Professional Certificate</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Interview Preparation</h5>
                                                                    <ul class="more-domains-list learn-more-gap list-unstyled flex-column">
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">Python Tutorial<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">What is Cloud Computing? A Beginner's Guide<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end tab of Get Job -->
                                            <div class="tab-pane fade" id="pills-11" role="tabpanel" aria-labelledby="pills-11-tab" tabindex="0">
                                                <div class="course-tabs-wraper">
                                                    <div class="course-tabs-row scrollbar-inner">
                                                        <div class="column w-100">
                                                            <div class="nav-card">
                                                                <div class="icon-img">
                                                                    <img src="assets/img/icons/corporate-career.webp" alt="Corporate Career" />
                                                                </div>
                                                                <div class="info-width">
                                                                    <div class="info">
                                                                        <h4>Corporate & Career Training Programs</h4>
                                                                        <p>Comprehensive programs for soft skills development, internships, job-oriented training, and career advancement in professional environments.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Soft Skills Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/communication-skills" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/soft-skills.webp" alt="soft skills" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Communication Skills<span class="dots"></span><span>2 Months</span></h6>
                                                                    <h6 class="desc2">Effective Communication & Presentation Skills</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/leadership-training" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/soft-skills.webp" alt="soft skills" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Leadership Training<span class="dots"></span><span>3 Months</span></h6>
                                                                    <h6 class="desc2">Leadership & Team Management</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Internships Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/summer-internship" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/internship.webp" alt="internship" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Summer Internship<span class="dots"></span><span>2 Months</span></h6>
                                                                    <h6 class="desc2">Summer Internship Program</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/6-months-internship" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/internship.webp" alt="internship" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Industrial Internship<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">6 Months Industrial Internship</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="column">
                                                            <h5>Job-Oriented Programs Track</h5>
                                                            <hr>
                                                            <a href="https://training.webasha.com/job-guarantee-program" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/job-oriented.webp" alt="job oriented" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Job Guarantee Bootcamp<span class="dots"></span><span>6 Months</span></h6>
                                                                    <h6 class="desc2">Job Guarantee Bootcamp</h6>
                                                                    <div class="seller">Best Seller</div>
                                                                </div>
                                                            </a>
                                                            <a href="https://training.webasha.com/career-development" class="course-link text-decoration-none">
                                                                <div class="image-icon">
                                                                    <img src="assets/img/icons/job-oriented.webp" alt="job oriented" />
                                                                </div>
                                                                <div class="info">
                                                                    <h6 class="desc1 flex-desc">Career Development<span class="dots"></span><span>4 Months</span></h6>
                                                                    <h6 class="desc2">Career Development & Placement Training</h6>
                                                                    <div class="seller trending">Trending</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="course-learn-more-bar scrollbar-inner">
                                                            <div class="course-learn-more-row">
                                                                <div class="course-learn-more-column">
                                                                    <h5 class="course-learn-more-title">Interview Preparation</h5>
                                                                    <ul class="more-domains-list learn-more-gap list-unstyled flex-column">
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">Python Tutorial<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                        <li><a href="https://training.webasha.com/#" class="text-decoration-none more-text">What is Cloud Computing? A Beginner's Guide<i class="fa-solid fa-arrow-up arrow-right"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end tab of Get Job -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="overlay" class="overlay"></div>

</div>

<!-- Search Modal -->
<div class="search-poup modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="search">
                <input class="form-control" type="name" placeholder="Course title or keyword" aria-label="Search">
                <img src="assets/imgs/search.png" alt="search" />
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>

<!-- Mobile-Header-Start -->