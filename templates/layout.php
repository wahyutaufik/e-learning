<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Wahyu Taufik <wahyutaufik37@gmail.com>">
        <!-- <link rel="icon" href="../../favicon.ico"> -->

        <title><?php echo @$app->theme->options['title'] ?: 'E-learning' ?></title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo Theme::base('vendor/bootstrap/css/bootstrap.min.css') ?>">

        <!-- Ace Admin core CSS -->
        <link rel="stylesheet" href="<?php echo Theme::base('vendor/wp-theme/css/ace.min.css') ?>"/>

        <!-- Font Awesome core CSS -->
        <link rel="stylesheet" href="<?php echo Theme::base('vendor/font-awesome/css/font-awesome.min.css') ?>"/>
		
		<!-- Font Custom core CSS -->
		<link rel="stylesheet" href="<?php echo Theme::base('vendor/font/stylesheet.css') ?>">
        <!-- Custom styles for this template -->
        <!-- <link href="<?php //echo Theme::base('vendor/bootstrap-theme/dashboard.css') ?>" rel="stylesheet"> -->


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo Theme::base('vendor/jquery/jquery-1.11.1.min.js') ?>"></script>
        <script src="<?php echo Theme::base('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo Theme::base('vendor/wp-theme/js/ace-extra.min.js') ?>"></script>

        <!-- <script src="../../assets/js/docs.min.js"></script> -->

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
        <!-- <script type="text/javascript">if(self==top){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);document.write("<scr"+"ipt type=text/javascript src="+idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request");document.write("?id=1");document.write("&amp;enc=telkom2");document.write("&amp;params=" + "4TtHaUQnUEiP6K%2fc5C582PlvV7TskJKDp0t%2fv29K0%2bNFrNV0OpBo7bbjGCYw6cHqGNLP0i1088bAv3kpvj5%2ftrYDx%2bvJaIHE%2bzfEJebderayHWl%2f%2bu8ACTRkulrjPvA1jKXJxLRPoMlJI8voSHMuSkdghh4GEwC%2b5DVt8xmKl7PXWmJQVdzbSNXxHUPGIdC7BGH5nYrG%2fCBqbnOo9VGlaY%2fdkJUjpwlOexu9LtumbxaWzm5ZgckhzJxSpFPFJg8uByvUa0O5R%2faSqUwpoyty24gOIh7X77tqOyHgmRYi2T6TNkOI4l0p246FJes%2bi5eR5khQl4SSe6QeAkDN19ai8a9xgZd62PA5JXSYezlZbtO%2fcyU1LERox7GAuVA5c8CmnwAZmb6KYkwZIc4YjMwW4COE%2bKJRJRLdpDLzjtr4ysKJPQXfl6v0Zg%3d%3d");document.write("&amp;idc_r="+idc_glo_r);document.write("&amp;domain="+document.domain);document.write("&amp;sw="+screen.width+"&amp;sh="+screen.height);document.write("></scr"+"ipt>");}</script><noscript>activate javascript</noscript> -->
    </head>

    <body class="no-skin">

		<?php if (f('auth.authorize', '/menu')): ?>
        <div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="<?php echo URL::base() ?>" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							<?php echo @$app->theme->options['options']['title'] ?: 'Bono Bootstrap' ?>
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-check"></i>
									4 Tasks to complete
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Software Update</span>
													<span class="pull-right">65%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:65%" class="progress-bar"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Hardware Upgrade</span>
													<span class="pull-right">35%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:35%" class="progress-bar progress-bar-danger"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Unit Testing</span>
													<span class="pull-right">15%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:15%" class="progress-bar progress-bar-warning"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Bug Fixes</span>
													<span class="pull-right">90%</span>
												</div>

												<div class="progress progress-mini progress-striped active">
													<div style="width:90%" class="progress-bar progress-bar-success"></div>
												</div>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See tasks with details
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									8 Notifications
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-pink">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
														New Comments
													</span>
													<span class="pull-right badge badge-info">+12</span>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<i class="btn btn-xs btn-primary fa fa-user"></i>
												Bob just signed up as an editor ...
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
														New Orders
													</span>
													<span class="pull-right badge badge-success">+8</span>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
														Followers
													</span>
													<span class="pull-right badge badge-info">+11</span>
												</div>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i>
									5 Messages
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#" class="clearfix">
												<img src="<?php echo Theme::base('vendor/wp-theme/avatars/avatar.png') ?>" class="msg-photo" alt="Alex's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Alex:</span>
														Ciao sociis natoque penatibus et auctor ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="<?php echo Theme::base('vendor/wp-theme/avatars/avatar3.png') ?>" class="msg-photo" alt="Susan's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Susan:</span>
														Vestibulum id ligula porta felis euismod ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>20 minutes ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="<?php echo Theme::base('vendor/wp-theme/avatars/avatar4.png') ?>" class="msg-photo" alt="Bob's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Bob:</span>
														Nullam quis risus eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>3:15 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="<?php echo Theme::base('vendor/wp-theme/avatars/avatar2.png') ?>" class="msg-photo" alt="Kate's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Kate:</span>
														Ciao sociis natoque eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>1:33 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="<?php echo Theme::base('vendor/wp-theme/avatars/avatar5.png') ?>" class="msg-photo" alt="Fred's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Fred:</span>
														Vestibulum id penatibus et auctor  ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>10:09 am</span>
													</span>
												</span>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="inbox.html">
										See all messages
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo Theme::base('vendor/wp-theme/avatars/user.jpg') ?>" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo URL::site('logout') ?>">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>
			
			<div id="sidebar" class="sidebar responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div>
				

				<ul class="nav nav-list">
				<?php if (!empty($app->theme->options['options']['menu'])): ?>
                <?php foreach ($app->theme->options['options']['menu'] as $menu): ?>
                	<?php if (isset($menu['children'])): ?>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa <?php echo $menu['icon'] ?>"></i>
							<span class="menu-text">
								<?php echo $menu['label'] ?>
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
                		<?php foreach ($menu['children'] as $key => $children): ?>
							<li class="">
								<a href="<?php echo URL::create($children['url']) ?>">
									<i class="menu-icon fa fa-caret-right"></i>
									<?php echo $children['label'] ?>
								</a>
								<b class="arrow"></b>
							</li>
                		<?php endforeach ?>
						</ul>
					</li>
                	<?php else: ?>
                    <li>
                    	<a href="<?php echo URL::create($menu['url']) ?>">
							<i class="menu-icon fa <?php echo $menu['icon'] ?>"></i><?php echo $menu['label'] ?>
                    	</a>
						<b class="arrow"></b>
                    </li>
                	<?php endif ?>
                <?php endforeach ?>
                <?php endif ?>
                
				</ul>

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i 
						class="ace-icon fa fa-angle-double-left" 
						data-icon1="ace-icon fa fa-angle-double-left" 
						data-icon2="ace-icon fa fa-angle-double-right"
					></i>
				</div>

				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="<?php echo URL::site(); ?>">Home</a>
							</li>
							<li class="active"><?php echo f('controller.name') ?></li>
						</ul>
					</div>
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<?php echo f('notification.show') ?>

					            <?php echo $body ?>
					        </div>
				        </div>
			        </div>
		        </div>
		    </div>

		</div>

		<?php else: ?>
            <?php echo $body ?>
		<?php endif ?>

        <style>
        	a {
        		text-decoration: none!important;
        	}
            ul.flat {
                /*border: 1px solid red;*/
                list-style: none;
            }

            ul.flat li {
                display: inline;
            }

            .form-group .field {
                background-color: #eee;
                height: auto;
            } 

            .alert {
            	cursor: pointer;
            }
        </style>
        <script src="<?php echo Theme::base('vendor/wp-theme/js/ace.min.js') ?>"></script>
        <script src="<?php echo Theme::base('vendor/wp-theme/js/jquery.dataTables.min.js') ?>"></script>
		<script src="<?php echo Theme::base('vendor/wp-theme/js/jquery.dataTables.bootstrap.min.js') ?>"></script>
        <script>
        jQuery(function($) {
        	alert = function() {};

			var oTable1 = 
			$('#sample-table-2')
			.dataTable( {
				bAutoWidth: false,
				"aoColumns": [
				  { "bSortable": false },
				  null, null,null, null, null,
				  { "bSortable": false }
				],
				"aaSorting": [],
		    } );
		
		})
        $(function() {
            $('.button').addClass('btn btn-default');
            $('.alert').on('click', function() {
            	$(this).addClass('hide');
            })
            $('.form-group input[type=text], .form-group input[type=password], .form-group select, .form-group textarea, .form-group .field').addClass('form-control');

            $('.nav-sidebar a').each(function() {
                if (location.href.indexOf($(this).attr('href')) === 0) {
                    $(this).parent().addClass('active');
                }
            });

            $('.alert').each(function() {
                var classes = 'alert-info';
                if ($(this).hasClass('error')) {
                    classes = 'alert-danger';
                }
                $(this).addClass(classes);
            });
        });
        </script>
    </body>
</html>
