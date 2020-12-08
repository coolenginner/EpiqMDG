<?php $page="doctor-dashboard";?>
@extends('layout.mainlayout')
@section('content')
	<!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-12">
				    <form class="search-form">
						<div class="input-group">
							<input type="text" placeholder="Search..." class="form-control">
								<div class="input-group-append">
									<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
								</div>
						</div>
					</form>
				</div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
    
    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
                    
                    <!-- Profile Sidebar -->
                    <div class="profile-sidebar">
                        <div class="widget-profile pro-widget-content">
                            <div class="profile-info-widget">
                                <a href="#" class="booking-doc-img">
                                    <img src="assets/img/doctors/mrdoctor.png" alt="User Image">
                                </a>
                                <div class="profile-det-info">
                                    <h3>Dr. Justin Jones</h3>
                                    
                                    <div class="patient-details">
                                        <h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-widget">
                            <nav class="dashboard-menu">
                                <ul>
                                    <li>
                                        <a href="doctor-dashboard">
                                            <i class="fas fa-columns"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="appointments">
                                            <i class="fas fa-calendar-check"></i>
                                            <span>Appointments</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="my-patients">
                                            <i class="fas fa-user-injured"></i>
                                            <span>My Patients</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="schedule-timings">
                                            <i class="fas fa-hourglass-start"></i>
                                            <span>Schedule Timings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="invoices">
                                            <i class="fas fa-file-invoice"></i>
                                            <span>Invoices</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="reviews">
                                            <i class="fas fa-star"></i>
                                            <span>Reviews</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="chat-doctor">
                                            <i class="fas fa-comments"></i>
                                            <span>Message</span>
                                            <small class="unread-msg">23</small>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="doctor-profile-settings">
                                            <i class="fas fa-user-cog"></i>
                                            <span>Profile Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="social-media">
                                            <i class="fas fa-share-alt"></i>
                                            <span>Social Media</span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="doctor-change-password">
                                            <i class="fas fa-lock"></i>
                                            <span>Document Manager</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index">
                                            <i class="fas fa-sign-out-alt"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- /Profile Sidebar -->
                    
                </div>
                
                <div class="col-md-7 col-lg-8 col-xl-9">
                    
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="mb-4">Document Manager</h2>
                            <div class="appointment-tab">
                            
                                <!-- Appointment Tab -->
                                <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#upcoming-appointments" data-toggle="tab">Upload Now</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#today-appointments" data-toggle="tab">View Documents</a>
                                    </li> 
                                </ul>
                                <!-- /Appointment Tab -->
                                
                                <div class="tab-content">
                                
                                    <!-- Upcoming Appointment Tab -->
                                    <div class="tab-pane show active" id="upcoming-appointments">
										<div class="form-group">
											<form action="#" class="dropzone dz-clickable"><div class="dz-default dz-message"><span>Drop files here to upload</span></div></form>
										</div>
									</div>
                                    <!-- /Upcoming Appointment Tab -->
                               
                                    <!-- Today Appointment Tab -->
                                    <div class="tab-pane" id="today-appointments">
                                        <div class="card card-table mb-0">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-center mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>File Name</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h2 class="table-avatar">File1</h2>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																			<i class="fa fa-arrow-down" aria-hidden="true"></i> Download
                                                                        </a>
                                                                    </div>
                                                                </td>
															</tr>
															<tr>
                                                                <td>
                                                                    <h2 class="table-avatar">File2</h2>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																			<i class="fa fa-arrow-down" aria-hidden="true"></i> Download
                                                                        </a>
                                                                    </div>
                                                                </td>
															</tr>
															<tr>
                                                                <td>
                                                                    <h2 class="table-avatar">File3</h2>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																			<i class="fa fa-arrow-down" aria-hidden="true"></i> Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
															<tr>
                                                                <td>
                                                                    <h2 class="table-avatar">File4</h2>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																			<i class="fa fa-arrow-down" aria-hidden="true"></i> Download
                                                                        </a>
                                                                    </div>
                                                                </td>
															</tr>
															<tr>
                                                                <td>
                                                                    <h2 class="table-avatar">File5</h2>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																			<i class="fa fa-arrow-down" aria-hidden="true"></i> Download
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>		
                                                </div>	
                                            </div>	
                                        </div>	
                                    </div>
                                </div>
                            </div>
						</div>
						<div class="col-md-4 col-lg-4 col-xl-4">
							<div class="card post-widget">
								<div class="card-header">
									<h4 class="card-title">Notifications</h4>
								</div>
								<div class="card-body">
									<ul class="latest-posts">
										<li>
											<div class="post-thumb">
												<a href="blog-details">
													<img class="img-fluid" src="assets/img/blog/blog-thumb-01.jpg" alt="">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="blog-details">Doccure – Making your clinic painless visit?</a>
												</h4>
												<p>4 Dec 2019</p>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="blog-details">
													<img class="img-fluid" src="assets/img/blog/blog-thumb-02.jpg" alt="">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="blog-details">What are the benefits of Online Doctor Booking?</a>
												</h4>
												<p>3 Dec 2019</p>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="blog-details">
													<img class="img-fluid" src="assets/img/blog/blog-thumb-03.jpg" alt="">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="blog-details">Benefits of consulting with an Online Doctor</a>
												</h4>
												<p>3 Dec 2019</p>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="blog-details">
													<img class="img-fluid" src="assets/img/blog/blog-thumb-04.jpg" alt="">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="blog-details">5 Great reasons to use an Online Doctor</a>
												</h4>
												<p>2 Dec 2019</p>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="blog-details">
													<img class="img-fluid" src="assets/img/blog/blog-thumb-05.jpg" alt="">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="blog-details">Online Doctor Appointment Scheduling</a>
												</h4>
												<p>1 Dec 2019</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
                            <div class="card">
								<div class="card-body">
									<div id="calendar"></div>
								</div>
							</div>
                            <div class="card booking-card">
								<div class="card-header">
									<h4 class="card-title">Your Health at a Glance</h4>
								</div>
								<div class="card-body">									
									<div class="booking-summary">
										<div class="booking-item-wrap">
											<ul class="booking-date">
												<li>Gender <span>Male</span></li>
												<li>Age <span>28 old</span></li>
											</ul>
											<ul class="booking-fee">
												<li>Medications <span>Iron Supplement</span></li>
												<li>Allergies <span>N/A</span></li>
												<li>Health Reminders <span>Hep C Screening - OVERDUE Flu Shot - OVERDUE</span></li>
											</ul>
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
@endsection