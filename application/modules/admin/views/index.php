<?php include('layout/css.php'); ?>
<div class="wrapper  theme-3-active pimary-color-blue">
	<!-- Top Menu Items -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="mobile-only-brand pull-left">
			<div class="nav-header pull-left">
				<div class="logo-wrap">
					<a href="index.html">
						<img class="brand-img" src="<?php echo base_url('optimum') ?>/img/logo.png" alt="brand" />
						<span class="brand-text">Snoopy</span>
					</a>
				</div>
			</div>
			<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
			<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
			<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
			<form id="search_form" role="search" class="top-nav-search collapse pull-left">
				<div class="input-group">
					<input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
					<span class="input-group-btn">
						<button type="button" class="btn  btn-default" data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
					</span>
				</div>
			</form>
		</div>
		<div id="mobile_only_nav" class="mobile-only-nav pull-right">
			<ul class="nav navbar-right top-nav pull-right">
				<li>
					<a id="open_right_sidebar" href="#"><i class="zmdi zmdi-settings top-nav-icon"></i></a>
				</li>


				<li class="dropdown alert-drp">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-notifications top-nav-icon"></i><span class="top-nav-icon-badge">5</span></a>
					<ul class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
						<li>
							<div class="notification-box-head-wrap">
								<span class="notification-box-head pull-left inline-block">notifications</span>
								<a class="txt-danger pull-right clear-notifications inline-block" href="javascript:void(0)"> clear all </a>
								<div class="clearfix"></div>
								<hr class="light-grey-hr ma-0" />
							</div>
						</li>
						<li>
							<div class="streamline message-nicescroll-bar">
								<div class="sl-item">
									<a href="javascript:void(0)">
										<div class="icon bg-green">
											<i class="zmdi zmdi-flag"></i>
										</div>
										<div class="sl-content">
											<span class="inline-block capitalize-font  pull-left truncate head-notifications">
												New subscription created</span>
											<span class="inline-block font-11  pull-right notifications-time">2pm</span>
											<div class="clearfix"></div>
											<p class="truncate">Your customer subscribed for the basic plan. The customer will pay $25 per month.</p>
										</div>
									</a>
								</div>
								<hr class="light-grey-hr ma-0" />
								<div class="sl-item">
									<a href="javascript:void(0)">
										<div class="icon bg-yellow">
											<i class="zmdi zmdi-trending-down"></i>
										</div>
										<div class="sl-content">
											<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">Server #2 not responding</span>
											<span class="inline-block font-11 pull-right notifications-time">1pm</span>
											<div class="clearfix"></div>
											<p class="truncate">Some technical error occurred needs to be resolved.</p>
										</div>
									</a>
								</div>
								<hr class="light-grey-hr ma-0" />
								<div class="sl-item">
									<a href="javascript:void(0)">
										<div class="icon bg-blue">
											<i class="zmdi zmdi-email"></i>
										</div>
										<div class="sl-content">
											<span class="inline-block capitalize-font  pull-left truncate head-notifications">2 new messages</span>
											<span class="inline-block font-11  pull-right notifications-time">4pm</span>
											<div class="clearfix"></div>
											<p class="truncate"> The last payment for your G Suite Basic subscription failed.</p>
										</div>
									</a>
								</div>
								<hr class="light-grey-hr ma-0" />
								<div class="sl-item">
									<a href="javascript:void(0)">
										<div class="sl-avatar">
											<img class="img-responsive" src="<?php echo base_url('optimum') ?>/img/avatar.jpg" alt="avatar" />
										</div>
										<div class="sl-content">
											<span class="inline-block capitalize-font  pull-left truncate head-notifications">Sandy Doe</span>
											<span class="inline-block font-11  pull-right notifications-time">1pm</span>
											<div class="clearfix"></div>
											<p class="truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
										</div>
									</a>
								</div>
								<hr class="light-grey-hr ma-0" />
								<div class="sl-item">
									<a href="javascript:void(0)">
										<div class="icon bg-red">
											<i class="zmdi zmdi-storage"></i>
										</div>
										<div class="sl-content">
											<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-danger">99% server space occupied.</span>
											<span class="inline-block font-11  pull-right notifications-time">1pm</span>
											<div class="clearfix"></div>
											<p class="truncate">consectetur, adipisci velit.</p>
										</div>
									</a>
								</div>
							</div>
						</li>
						<li>
							<div class="notification-box-bottom-wrap">
								<hr class="light-grey-hr ma-0" />
								<a class="block text-center read-all" href="javascript:void(0)"> read all </a>
								<div class="clearfix"></div>
							</div>
						</li>
					</ul>
				</li>
				<li class="dropdown auth-drp">
					<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="<?php echo base_url('optimum') ?>/img/user1.png" alt="user_auth" class="user-auth-img img-circle" /><span class="user-online-status"></span></a>
					<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
						<li>
							<a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
						</li>

						<li>
							<a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
						</li>

						<li>
							<a href="<?php echo base_url('Authentication/logout')?>"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<!-- /Top Menu Items -->

	<!-- Left Sidebar Menu -->
	<div class="fixed-sidebar-left">
		<ul class="nav navbar-nav side-nav nicescroll-bar">

			<li>
				<a class="active" href="<?php echo base_url('admin/Dashboard')?>" data-toggle="collapse" data-target="#dashboard_dr">
					<div class="pull-left"><i class="zmdi zmdi-view-dashboard mr-20"></i><span class="right-nav-text">Dashboard</span></div>

					<div class="clearfix"></div>
				</a>

			</li>
			<li>
				<a href="<?php echo base_url('admin/user') ?>" data-toggle="collapse" data-target="#ecom_dr">
					<div class="pull-left"><i class="zmdi zmdi-account-o mr-20"></i><span class="right-nav-text">Users</span></div>
					<div class="clearfix"></div>
				</a>

			</li>
			<li>
				<a href="javascript:void(0)" data-toggle="collapse" data-target="#pro">
					<div class="pull-left"><i class="zmdi zmdi-apps mr-20"></i><span class="right-nav-text">Products </span></div>
					<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
					<div class="clearfix"></div>
				</a>
				<ul id="pro" class="collapse collapse-level-1 two-col-list">
					<li>
						<a href="<?php echo base_url('admin/Product/attribute')?>">Add Product</a>
					</li>

					<li>
						<a href="<?php echo base_url('admin/Product')?>">Product List</a>
					</li>
					<li>
						<a href="<?php echo base_url('admin/Attribute')?>">Attribute </a>
					</li>
				</ul>
			</li>
			<li>
				<a href="<?php echo base_url('admin/Gallery')?>">
					<div class="pull-left"><i class="zmdi zmdi-collection-folder-image mr-20"></i><span class="right-nav-text">Gallery</span></div>
					<div class="pull-right"><span class="label label-success">8</span></div>
					<div class="clearfix"></div>
				</a>
			</li>

			<li>
				<a href="javascript:void(0)" data-toggle="collapse" data-target="#ui_dr">
					<div class="pull-left"><i class="zmdi zmdi-collection-music mr-20"></i><span class="right-nav-text">Media</span></div>
					<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
					<div class="clearfix"></div>
				</a>
				<ul id="ui_dr" class="collapse collapse-level-1 two-col-list">
					<li>
						<a href="<?php echo base_url('admin/Media/add')?>">Add New</a>
					</li>
					<li>
						<a href="<?php echo base_url('admin/Media')?>">View List</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="<?php echo base_url('admin/Category')?>" data-toggle="collapse" data-target="#form_dr">
					<div class="pull-left"><i class="zmdi zmdi-edit mr-20"></i><span class="right-nav-text">Category</span></div>

					<div class="clearfix"></div>
				</a>

			</li>

			<li>
				<a href="<?php echo base_url('admin/Tags')?>" data-toggle="collapse" data-target="#table_dr">
					<div class="pull-left"><i class="zmdi zmdi-format-size mr-20"></i><span class="right-nav-text">Tags</span></div>

					<div class="clearfix"></div>
				</a>

			</li>
			<li>
				<a href="javascript:void(0)" data-toggle="collapse" data-target="#ui_dr1">
					<div class="pull-left"><i class="zmdi zmdi-collection-music mr-20"></i><span class="right-nav-text">Article</span></div>
					<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
					<div class="clearfix"></div>
				</a>
				<ul id="ui_dr1" class="collapse collapse-level-1 two-col-list">
					<li>
						<a href="<?php echo base_url('admin/Article')?>">Add Article</a>
					</li>
					<li>
						<a href="<?php echo base_url('admin/Article/View')?>">Show List</a>
					</li>

				</ul>
			</li>
			<li>
				<a href="<?php echo base_url('admin/News')?>" data-toggle="collapse" data-target="#maps_dr">
					<div class="pull-left"><i class="zmdi zmdi-map mr-20"></i><span class="right-nav-text">News</span></div>
					<div class="clearfix"></div>
				</a>

			</li>

			<li>
				<a href="<?php echo base_url('admin/Contact')?>" data-toggle="collapse" data-target="#pages_dr">
					<div class="pull-left"><i class="zmdi zmdi-google-pages mr-20"></i><span class="right-nav-text">Contact List</span></div>
					<div class="clearfix"></div>
				</a>

			</li>
			<li>
				<a href="Order">
					<div class="pull-left"><i class="zmdi zmdi-book mr-20"></i><span class="right-nav-text">Order List</span></div>
					<div class="clearfix"></div>
				</a>
			</li>
			<li>
				<a href="javascript:void(0)" data-toggle="collapse" data-target="#setting">
					<div class="pull-left"><i class="zmdi zmdi-collection-music mr-20"></i><span class="right-nav-text">Setting</span></div>
					<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
					<div class="clearfix"></div>
				</a>
				<ul id="setting" class="collapse collapse-level-1 two-col-list">
					<li>
						<a href="<?php echo base_url('admin/setting/slider')?>">Add Slider</a>
					</li>

				</ul>
			</li>
		</ul>
	</div>
	<!-- /Left Sidebar Menu -->

	<!-- Right Sidebar Menu -->
	<div class="fixed-sidebar-right">
		<ul class="right-sidebar">
			<li>
				<div class="tab-struct custom-tab-1">
					<ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
						<li class="active" role="presentation"><a aria-expanded="true" data-toggle="tab" role="tab" id="chat_tab_btn" href="#chat_tab">chat</a></li>
						<li role="presentation" class=""><a data-toggle="tab" id="messages_tab_btn" role="tab" href="#messages_tab" aria-expanded="false">messages</a></li>
						<li role="presentation" class=""><a data-toggle="tab" id="todo_tab_btn" role="tab" href="#todo_tab" aria-expanded="false">todo</a></li>
					</ul>
					<div class="tab-content" id="right_sidebar_content">
						<div id="chat_tab" class="tab-pane fade active in" role="tabpanel">
							<div class="chat-cmplt-wrap">
								<div class="chat-box-wrap">
									<div class="add-friend">
										<a href="javascript:void(0)" class="inline-block txt-grey">
											<i class="zmdi zmdi-more"></i>
										</a>
										<span class="inline-block txt-dark">users</span>
										<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
										<div class="clearfix"></div>
									</div>
									<form role="search" class="chat-search pl-15 pr-15 pb-15">
										<div class="input-group">
											<input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
											<span class="input-group-btn">
												<button type="button" class="btn  btn-default"><i class="zmdi zmdi-search"></i></button>
											</span>
										</div>
									</form>
									<div id="chat_list_scroll">
										<div class="nicescroll-bar">
											<ul class="chat-list-wrap">
												<li class="chat-list">
													<div class="chat-body">
														<a href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle" src="<?php echo base_url('optimum') ?>/img/user.png" alt="user" />
																<div class="user-data">
																	<span class="name block capitalize-font">Clay Masse</span>
																	<span class="time block truncate txt-grey">No one saves us but ourselves.</span>
																</div>
																<div class="status away"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle" src="<?php echo base_url('optimum') ?>/img/user1.png" alt="user" />
																<div class="user-data">
																	<span class="name block capitalize-font">Evie Ono</span>
																	<span class="time block truncate txt-grey">Unity is strength</span>
																</div>
																<div class="status offline"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle" src="<?php echo base_url('optimum') ?>/img/user2.png" alt="user" />
																<div class="user-data">
																	<span class="name block capitalize-font">Madalyn Rascon</span>
																	<span class="time block truncate txt-grey">Respect yourself if you would have others respect you.</span>
																</div>
																<div class="status online"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle" src="<?php echo base_url('optimum') ?>/img/user3.png" alt="user" />
																<div class="user-data">
																	<span class="name block capitalize-font">Mitsuko Heid</span>
																	<span class="time block truncate txt-grey">I’m thankful.</span>
																</div>
																<div class="status online"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle" src="<?php echo base_url('optimum') ?>/img/user.png" alt="user" />
																<div class="user-data">
																	<span class="name block capitalize-font">Ezequiel Merideth</span>
																	<span class="time block truncate txt-grey">Patience is bitter.</span>
																</div>
																<div class="status offline"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle" src="<?php echo base_url('optimum') ?>/img/user1.png" alt="user" />
																<div class="user-data">
																	<span class="name block capitalize-font">Jonnie Metoyer</span>
																	<span class="time block truncate txt-grey">Genius is eternal patience.</span>
																</div>
																<div class="status online"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle" src="<?php echo base_url('optimum') ?>/img/user2.png" alt="user" />
																<div class="user-data">
																	<span class="name block capitalize-font">Angelic Lauver</span>
																	<span class="time block truncate txt-grey">Every burden is a blessing.</span>
																</div>
																<div class="status away"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle" src="<?php echo base_url('optimum') ?>/img/user3.png" alt="user" />
																<div class="user-data">
																	<span class="name block capitalize-font">Priscila Shy</span>
																	<span class="time block truncate txt-grey">Wise to resolve, and patient to perform.</span>
																</div>
																<div class="status online"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle" src="<?php echo base_url('optimum') ?>/img/user4.png" alt="user" />
																<div class="user-data">
																	<span class="name block capitalize-font">Linda Stack</span>
																	<span class="time block truncate txt-grey">Our patience will achieve more than our force.</span>
																</div>
																<div class="status away"></div>
																<div class="clearfix"></div>
															</div>
														</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="recent-chat-box-wrap">
									<div class="recent-chat-wrap">
										<div class="panel-heading ma-0">
											<div class="goto-back">
												<a id="goto_back" href="javascript:void(0)" class="inline-block txt-grey">
													<i class="zmdi zmdi-chevron-left"></i>
												</a>
												<span class="inline-block txt-dark">ryan</span>
												<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-more"></i></a>
												<div class="clearfix"></div>
											</div>
										</div>
										<div class="panel-wrapper collapse in">
											<div class="panel-body pa-0">
												<div class="chat-content">
													<ul class="nicescroll-bar pt-20">
														<li class="friend">
															<div class="friend-msg-wrap">
																<img class="user-img img-circle block pull-left" src="<?php echo base_url('optimum') ?>/img/user.png" alt="user" />
																<div class="msg pull-left">
																	<p>Hello Jason, how are you, it's been a long time since we last met?</p>
																	<div class="msg-per-detail text-right">
																		<span class="msg-time txt-grey">2:30 PM</span>
																	</div>
																</div>
																<div class="clearfix"></div>
															</div>
														</li>
														<li class="self mb-10">
															<div class="self-msg-wrap">
																<div class="msg block pull-right"> Oh, hi Sarah I'm have got a new job now and is going great.
																	<div class="msg-per-detail text-right">
																		<span class="msg-time txt-grey">2:31 pm</span>
																	</div>
																</div>
																<div class="clearfix"></div>
															</div>
														</li>
														<li class="self">
															<div class="self-msg-wrap">
																<div class="msg block pull-right"> How about you?
																	<div class="msg-per-detail text-right">
																		<span class="msg-time txt-grey">2:31 pm</span>
																	</div>
																</div>
																<div class="clearfix"></div>
															</div>
														</li>
														<li class="friend">
															<div class="friend-msg-wrap">
																<img class="user-img img-circle block pull-left" src="<?php echo base_url('optimum') ?>/img/user.png" alt="user" />
																<div class="msg pull-left">
																	<p>Not too bad.</p>
																	<div class="msg-per-detail  text-right">
																		<span class="msg-time txt-grey">2:35 pm</span>
																	</div>
																</div>
																<div class="clearfix"></div>
															</div>
														</li>
													</ul>
												</div>
												<div class="input-group">
													<input type="text" id="input_msg_send" name="send-msg" class="input-msg-send form-control" placeholder="Type something">
													<div class="input-group-btn emojis">
														<div class="dropup">
															<button type="button" class="btn  btn-default  dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-mood"></i></button>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="javascript:void(0)">Action</a></li>
																<li><a href="javascript:void(0)">Another action</a></li>
																<li class="divider"></li>
																<li><a href="javascript:void(0)">Separated link</a></li>
															</ul>
														</div>
													</div>
													<div class="input-group-btn attachment">
														<div class="fileupload bt	n  btn-default"><i class="zmdi zmdi-attachment-alt"></i>
															<input type="file" class="upload">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div id="messages_tab" class="tab-pane fade" role="tabpanel">
							<div class="message-box-wrap">
								<div class="msg-search">
									<a href="javascript:void(0)" class="inline-block txt-grey">
										<i class="zmdi zmdi-more"></i>
									</a>
									<span class="inline-block txt-dark">messages</span>
									<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-search"></i></a>
									<div class="clearfix"></div>
								</div>
								<div class="set-height-wrap">
									<div class="streamline message-box nicescroll-bar">
										<a href="javascript:void(0)">
											<div class="sl-item unread-message">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="<?php echo base_url('optimum') ?>/img/user.png" alt="avatar" />
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font   pull-left message-per">Clay Masse</span>
													<span class="inline-block font-11  pull-right message-time">12:28 AM</span>
													<div class="clearfix"></div>
													<span class=" truncate message-subject">Themeforest message sent via your envato market profile</span>
													<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
										</a>
										<a href="javascript:void(0)">
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="<?php echo base_url('optimum') ?>/img/user1.png" alt="avatar" />
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font   pull-left message-per">Evie Ono</span>
													<span class="inline-block font-11  pull-right message-time">1 Feb</span>
													<div class="clearfix"></div>
													<span class=" truncate message-subject">Pogody theme support</span>
													<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
										</a>
										<a href="javascript:void(0)">
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="<?php echo base_url('optimum') ?>/img/user2.png" alt="avatar" />
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font   pull-left message-per">Madalyn Rascon</span>
													<span class="inline-block font-11  pull-right message-time">31 Jan</span>
													<div class="clearfix"></div>
													<span class=" truncate message-subject">Congratulations from design nominees</span>
													<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
										</a>
										<a href="javascript:void(0)">
											<div class="sl-item unread-message">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="<?php echo base_url('optimum') ?>/img/user3.png" alt="avatar" />
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font   pull-left message-per">Ezequiel Merideth</span>
													<span class="inline-block font-11  pull-right message-time">29 Jan</span>
													<div class="clearfix"></div>
													<span class=" truncate message-subject">Themeforest item support message</span>
													<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
										</a>
										<a href="javascript:void(0)">
											<div class="sl-item unread-message">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="<?php echo base_url('optimum') ?>/img/user4.png" alt="avatar" />
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font   pull-left message-per">Jonnie Metoyer</span>
													<span class="inline-block font-11  pull-right message-time">27 Jan</span>
													<div class="clearfix"></div>
													<span class=" truncate message-subject">Help with beavis contact form</span>
													<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
										</a>
										<a href="javascript:void(0)">
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="<?php echo base_url('optimum') ?>/img/user.png" alt="avatar" />
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font   pull-left message-per">Priscila Shy</span>
													<span class="inline-block font-11  pull-right message-time">19 Jan</span>
													<div class="clearfix"></div>
													<span class=" truncate message-subject">Your uploaded theme is been selected</span>
													<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
										</a>
										<a href="javascript:void(0)">
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="<?php echo base_url('optimum') ?>/img/user1.png" alt="avatar" />
												</div>
												<div class="sl-content">
													<span class="inline-block capitalize-font   pull-left message-per">Linda Stack</span>
													<span class="inline-block font-11  pull-right message-time">13 Jan</span>
													<div class="clearfix"></div>
													<span class=" truncate message-subject"> A new rating has been received</span>
													<p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div id="todo_tab" class="tab-pane fade" role="tabpanel">
							<div class="todo-box-wrap">
								<div class="add-todo">
									<a href="javascript:void(0)" class="inline-block txt-grey">
										<i class="zmdi zmdi-more"></i>
									</a>
									<span class="inline-block txt-dark">todo list</span>
									<a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
									<div class="clearfix"></div>
								</div>
								<div class="set-height-wrap">
									<!-- Todo-List -->
									<ul class="todo-list nicescroll-bar">
										<li class="todo-item">
											<div class="checkbox checkbox-default">
												<input type="checkbox" id="checkbox01" />
												<label for="checkbox01">Record The First Episode</label>
											</div>
										</li>
										<li>
											<hr class="light-grey-hr" />
										</li>
										<li class="todo-item">
											<div class="checkbox checkbox-pink">
												<input type="checkbox" id="checkbox02" />
												<label for="checkbox02">Prepare The Conference Schedule</label>
											</div>
										</li>
										<li>
											<hr class="light-grey-hr" />
										</li>
										<li class="todo-item">
											<div class="checkbox checkbox-warning">
												<input type="checkbox" id="checkbox03" checked />
												<label for="checkbox03">Decide The Live Discussion Time</label>
											</div>
										</li>
										<li>
											<hr class="light-grey-hr" />
										</li>
										<li class="todo-item">
											<div class="checkbox checkbox-success">
												<input type="checkbox" id="checkbox04" checked />
												<label for="checkbox04">Prepare For The Next Project</label>
											</div>
										</li>
										<li>
											<hr class="light-grey-hr" />
										</li>
										<li class="todo-item">
											<div class="checkbox checkbox-danger">
												<input type="checkbox" id="checkbox05" checked />
												<label for="checkbox05">Finish Up AngularJs Tutorial</label>
											</div>
										</li>
										<li>
											<hr class="light-grey-hr" />
										</li>
										<li class="todo-item">
											<div class="checkbox checkbox-purple">
												<input type="checkbox" id="checkbox06" checked />
												<label for="checkbox06">Finish Infinity Project</label>
											</div>
										</li>
										<li>
											<hr class="light-grey-hr" />
										</li>
									</ul>
									<!-- /Todo-List -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<!-- /Right Sidebar Menu -->



	<!-- Right Sidebar Backdrop -->
	<div class="right-sidebar-backdrop"></div>
	<!-- /Right Sidebar Backdrop -->

	<!-- Main Content -->
	<div class="page-wrapper">

		<?php echo	$main_content ?>

		<footer class="footer container-fluid pl-30 pr-30">
			<div class="footer-bottom">
		            <div class="container">
		                <div class="row">
		                    <div class="col-12">
		                        <div class="copyright-text text-center">
		                            <p>Powered By <a href="#">Corano</a>. Store 1 © 2020</p>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		</footer>

	</div>
	<!-- Footer -->

	<!-- /Footer -->
	<!-- /Main Content -->

</div>

<!-- /#wrapper -->

<?php include('layout/footer.php'); ?>
