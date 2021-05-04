<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<head>
<link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<style>
		body ,h1,h2,h3,h4,h5,p,a{
				font-family: "Poppins", sans-serif;
		}
		img{
			background-size: 100% 100%;
		}
		h4{
			text-transform: uppercase;
		}
		h4{
			color: #005D8D;
			font-weight: 600;
		}
		.panel{
			transition: transform 500ms;
		}
		i{
			font-size: 15px !important;
		}
		.icon a{
			color: unset !important;
		}
		.panel:hover{
			transform: translateY(-10px);
			box-shadow:
			0 2.8px 2.2px rgba(0, 0, 0, 0.034),
			0 6.7px 5.3px rgba(0, 0, 0, 0.048),
			0 12.5px 10px rgba(0, 0, 0, 0.06),
			0 22.3px 17.9px rgba(0, 0, 0, 0.072),
			0 41.8px 33.4px rgba(0, 0, 0, 0.086),
			0 100px 80px rgba(0, 0, 0, 0.12);
		}
		.btn-circle {
			width: 30px;
			height: 30px;
			padding: 6px 0px;
			border-radius: 15px;
			text-align: center;
			font-size: 12px;
			line-height: 1.42857;
			color: #337ab7;
		}
		.btn-circle:hover{
			background-color: #339AF0;
			color: white;
		}
	</style>
</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">
	      <section class="content">
		  <div class="page-header">
				<h1 style="font-weight: 600">About Us</h1>    
		</div>
		<div class="page-body">
			<h5> &nbsp RUPP e-commerce solution is backed up by powerful data processing capabilities and has been verified by RUPP mall. The solution supports high concurrency scenarios, even handling hundreds of millions of user requests when there are flash sales or other major events.&nbsp Our e-commerce has alot global brand around the world, any way it easy for those who want to buy with quality​ and confidence.</h5>        
		</div>
		  <div style="margin-top: 5%" class="container">    
		  <div class="row">
		  	<h1 style="font-weight: 600">Team</h1>
			  <hr/>
				<div class="col-md-6">
				<div class="panel" data-toggle="modal" data-target="#chhay">
					<div class="panel-body">
						<div class="col-md-4">
						<img src="images/chhay1.jpg" class="img-circle" alt="Cinque Terre" width="200" height="200">
						</div>
						<div class="col-md-6" style="margin-left: 10%;">
							<h4>Kang Kimchhay</h4>
							<p style="font-weight: 600">Founder</p>
							<hr/>
							<p>individual who forms and establishes a business or organization. The founder is typically responsible for setting the mission and vision company.</p>
							<div class="icon">
							<button type="button" class="btn btn-circle"><a href="https://web.facebook.com/"><i class="fa fa-facebook"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://twitter.com"><i class="fa fa-twitter"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://www.youtube.com/"><i class="fa fa-youtube"></a></i>
                            </button>
							</div>
						</div>
					</div>
				</div>
				</div>
				<div class="col-md-6"> 
				<div class="panel" data-toggle="modal" data-target="#rey">
					<div class="panel-body">
					<div class="col-md-4">
						<img src="images/reyy.jpg" class="img-circle" alt="Cinque Terre" width="200" height="200">
						</div>
						<div class="col-md-6" style="margin-left: 10%;">
							<h4>Un Borey</h4>
							<p style="font-weight: 600">Developer</p>
							<hr/>
							<p>software developer, a programmer or more recently a coder (especially in more informal contexts), is a person who creates computer software.</p>
							<div class="icon">
							<button type="button" class="btn btn-circle"><a href="https://web.facebook.com/"><i class="fa fa-facebook"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://twitter.com"><i class="fa fa-twitter"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://www.youtube.com/"><i class="fa fa-youtube"></a></i>
                            </button>
							</div>
						</div>
					</div>
				</div>
				</div>
				<div class="col-md-6"> 
				<div class="panel" data-toggle="modal" data-target="#lim-heng">
					<div class="panel-body">
					<div class="col-md-4">
						<img src="images/me.jpg" class="img-circle" alt="Cinque Terre" width="200" height="200" style="object-fit: cover;">
						</div>
						<div class="col-md-6" style="margin-left: 10%;">
							<h4>Kon Limheng</h4>
							<p style="font-weight: 600">Developer</p>
							<hr/>
							<p>software developer, a programmer or more recently a coder (especially in more informal contexts), is a person who creates computer software.</p>
							<div class="icon">
							<button type="button" class="btn btn-circle"><a href="https://web.facebook.com/"><i class="fa fa-facebook"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://twitter.com"><i class="fa fa-twitter"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://www.youtube.com/"><i class="fa fa-youtube"></a></i>
                            </button>
							</div>
						</div>
					</div>
				</div>
				</div>
				<div class="col-md-6"> 
				<div class="panel" data-toggle="modal" data-target="#pong">
					<div class="panel-body">
					<div class="col-md-4">
						<img src="images/pongg.jpg" class="img-circle" alt="Cinque Terre" width="200" height="200">
						</div>
						<div class="col-md-6" style="margin-left: 10%;">
							<h4>Vong PisethPong</h4>
							<p style="font-weight: 600">Developer</p>
							<hr/>
							<p>software developer, a programmer or more recently a coder (especially in more informal contexts), is a person who creates computer software.</p>
							<div class="icon">
							<button type="button" class="btn btn-circle"><a href="https://web.facebook.com/"><i class="fa fa-facebook"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://twitter.com"><i class="fa fa-twitter"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://www.youtube.com/"><i class="fa fa-youtube"></a></i>
                            </button>
							</div>
						</div>
					</div>
				</div>
				</div>
				<div class="col-md-6"> 
				<div class="panel" data-toggle="modal" data-target="#phea">
					<div class="panel-body">
					<div class="col-md-4">
						<img src="images/phea.jpg" class="img-circle" alt="Cinque Terre" width="200" height="200">
						</div>
						<div class="col-md-6" style="margin-left: 10%;">
							<h4>Sann Sophea</h4>
							<p style="font-weight: 600">Developer</p>
							<hr/>
							<p>software developer, a programmer or more recently a coder (especially in more informal contexts), is a person who creates computer software.</p>
							<div class="icon">
							<button type="button" class="btn btn-circle"><a href="https://web.facebook.com/"><i class="fa fa-facebook"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://twitter.com"><i class="fa fa-twitter"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://www.youtube.com/"><i class="fa fa-youtube"></a></i>
                            </button>
							</div>
						</div>
					</div>
				</div>
				</div>
				<div class="col-md-6"> 
				<div class="panel" data-toggle="modal" data-target="#chhoung">
					<div class="panel-body">
					<div class="col-md-4">
						<img src="images/chhoung.jpg" class="img-circle" alt="Cinque Terre" width="200" height="200">
						</div>
						<div class="col-md-6" style="margin-left: 10%;">
							<h4>Tang ThengChhoung</h4>
							<p style="font-weight: 600">Developer</p>
							<hr/>
							<p>software developer, a programmer or more recently a coder (especially in more informal contexts), is a person who creates computer software.</p>
							<div class="icon">
							<button type="button" class="btn btn-circle"><a href="https://web.facebook.com/"><i class="fa fa-facebook"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://twitter.com"><i class="fa fa-twitter"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://www.youtube.com/"><i class="fa fa-youtube"></a></i>
                            </button>
							</div>
						</div>
					</div>
				</div>
				</div>
				<div class="col-md-6"> 
				<div class="panel" data-toggle="modal" data-target="#heng">
					<div class="panel-body">
					<div class="col-md-4">
						<img src="images/heng.jpg" class="img-circle" alt="Cinque Terre" width="200" height="200">
						</div>
						<div class="col-md-6" style="margin-left: 10%;">
							<h4>Hok Chanheng</h4>
							<p style="font-weight: 600">Developer</p>
							<hr/>
							<p>software developer, a programmer or more recently a coder (especially in more informal contexts), is a person who creates computer software.</p>
							<div class="icon">
							<button type="button" class="btn btn-circle"><a href="https://web.facebook.com/"><i class="fa fa-facebook"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://twitter.com"><i class="fa fa-twitter"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://www.youtube.com/"><i class="fa fa-youtube"></a></i>
                            </button>
							</div>
						</div>
					</div>
				</div>
				</div>
				<div class="col-md-6"> 
				<div class="panel" data-toggle="modal" data-target="#minea">
					<div class="panel-body">
					<div class="col-md-4">
						<img src="images/chhay.jpg" class="img-circle" alt="Cinque Terre" width="200" height="200">
						</div>
						<div class="col-md-6" style="margin-left: 10%;">
							<h4>Hoeng Minea</h4>
							<p style="font-weight: 600">Developer</p>
							<hr/>
							<p>software developer, a programmer or more recently a coder (especially in more informal contexts), is a person who creates computer software.</p>
							<div class="icon">
							<button type="button" class="btn btn-circle"><a href="https://web.facebook.com/"><i class="fa fa-facebook"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://twitter.com"><i class="fa fa-twitter"></a></i>
                            </button>
							<button type="button" class="btn btn-circle"><a href="https://www.youtube.com/"><i class="fa fa-youtube"></a></i>
                            </button>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
			</div>
	      </section>
	    </div>
	  </div>
		<!-- Modal -->
		<div class="modal fade" id="chhay" role="dialog">
			<div class="modal-dialog">
			
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Kang Kimchhay</h4>
				</div>
				<div class="modal-body">
				<table class="table table-hover">
				<tbody>
					<tr>
						<th>Position: </th>
						<td>Founder</td>
					</tr>
					<tr>
						<th>Email: </th>
						<td><i style="color: #339AF0" class="fa fa-envelope"></i>&nbsp;&nbsp;chhay-rupp.com</td>
					</tr>
					<tr>
						<th>Nationality: </th>
						<td>Cambodain&nbsp;&nbsp;<img src="images/cambodia.png"></td>
					</tr>
					<tr>
						<th>Age: </th>
						<td>22</td>
					</tr>
					<tr>
						<th>Study: </th>
						<td><img style="width: 20px; height: 20px" src="images/rupp.png">&nbsp;&nbsp;Royal University of Phnom Penh</td>
					</tr>
					<tr>
						<th>Major: </th>
						<td>Computer Science</td>
					</tr>
					<tr>
						<th>Generate: </th>
						<td>21st</td>
					</tr>
					</tbody>
				</table>
				</div>
			</div>
			</div>
		</div>
		<!-- End Modal -->

		<!-- Modal -->
		<div class="modal fade" id="rey" role="dialog">
			<div class="modal-dialog">
			
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Un Borey</h4>
				</div>
				<div class="modal-body">
				<table class="table table-hover">
				<tbody>
					<tr>
						<th>Position: </th>
						<td>Developer</td>
					</tr>
					<tr>
						<th>Email: </th>
						<td><i style="color: #339AF0" class="fa fa-envelope"></i>&nbsp;&nbsp;rey-rupp.com</td>
					</tr>
					<tr>
						<th>Nationality: </th>
						<td>Cambodain&nbsp;&nbsp;<img src="images/cambodia.png"></td>
					</tr>
					<tr>
						<th>Age: </th>
						<td>22</td>
					</tr>
					<tr>
						<th>Study: </th>
						<td><img style="width: 20px; height: 20px" src="images/rupp.png">&nbsp;&nbsp;Royal University of Phnom Penh</td>
					</tr>
					<tr>
						<th>Major: </th>
						<td>Computer Science</td>
					</tr>
					<tr>
						<th>Generate: </th>
						<td>21st</td>
					</tr>
					</tbody>
				</table>
				</div>
			</div>
			</div>
		</div>
		<!-- End Modal -->

		<!-- Modal -->
		<div class="modal fade" id="lim-heng" role="dialog">
			<div class="modal-dialog">
			
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Kon Limheng</h4>
				</div>
				<div class="modal-body">
				<table class="table table-hover">
				<tbody>
					<tr>
						<th>Position: </th>
						<td>Developer</td>
					</tr>
					<tr>
						<th>Email: </th>
						<td><i style="color: #339AF0" class="fa fa-envelope"></i>&nbsp;&nbsp;lim-heng-rupp.com</td>
					</tr>
					<tr>
						<th>Nationality: </th>
						<td>Cambodain&nbsp;&nbsp;<img src="images/cambodia.png"></td>
					</tr>
					<tr>
						<th>Age: </th>
						<td>22</td>
					</tr>
					<tr>
						<th>Study: </th>
						<td><img style="width: 20px; height: 20px" src="images/rupp.png">&nbsp;&nbsp;Royal University of Phnom Penh</td>
					</tr>
					<tr>
						<th>Major: </th>
						<td>Computer Science</td>
					</tr>
					<tr>
						<th>Generate: </th>
						<td>21st</td>
					</tr>
					</tbody>
				</table>
				</div>
			</div>
			</div>
		</div>
		<!-- End Modal -->

		<!-- Modal -->
		<div class="modal fade" id="pong" role="dialog">
			<div class="modal-dialog">
			
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Vong Pisethpong</h4>
				</div>
				<div class="modal-body">
				<table class="table table-hover">
				<tbody>
					<tr>
						<th>Position: </th>
						<td>Developer</td>
					</tr>
					<tr>
						<th>Email: </th>
						<td><i style="color: #339AF0" class="fa fa-envelope"></i>&nbsp;&nbsp;pong-rupp.com</td>
					</tr>
					<tr>
						<th>Nationality: </th>
						<td>Cambodain&nbsp;&nbsp;<img src="images/cambodia.png"></td>
					</tr>
					<tr>
						<th>Age: </th>
						<td>22</td>
					</tr>
					<tr>
						<th>Study: </th>
						<td><img style="width: 20px; height: 20px" src="images/rupp.png">&nbsp;&nbsp;Royal University of Phnom Penh</td>
					</tr>
					<tr>
						<th>Major: </th>
						<td>Computer Science</td>
					</tr>
					<tr>
						<th>Generate: </th>
						<td>21st</td>
					</tr>
					</tbody>
				</table>
				</div>
			</div>
			</div>
		</div>
		<!-- End Modal -->

		<!-- Modal -->
		<div class="modal fade" id="phea" role="dialog">
			<div class="modal-dialog">
			
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Sann Sophea</h4>
				</div>
				<div class="modal-body">
				<table class="table table-hover">
				<tbody>
					<tr>
						<th>Position: </th>
						<td>Developer</td>
					</tr>
					<tr>
						<th>Email: </th>
						<td><i style="color: #339AF0" class="fa fa-envelope"></i>&nbsp;&nbsp;phea-rupp.com</td>
					</tr>
					<tr>
						<th>Nationality: </th>
						<td>Cambodain&nbsp;&nbsp;<img src="images/cambodia.png"></td>
					</tr>
					<tr>
						<th>Age: </th>
						<td>22</td>
					</tr>
					<tr>
						<th>Study: </th>
						<td><img style="width: 20px; height: 20px" src="images/rupp.png">&nbsp;&nbsp;Royal University of Phnom Penh</td>
					</tr>
					<tr>
						<th>Major: </th>
						<td>Computer Science</td>
					</tr>
					<tr>
						<th>Generate: </th>
						<td>21st</td>
					</tr>
					</tbody>
				</table>
				</div>
			</div>
			</div>
		</div>
		<!-- End Modal -->

		<!-- Modal -->
		<div class="modal fade" id="chhoung" role="dialog">
			<div class="modal-dialog">
			
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Tang ThengChhoung</h4>
				</div>
				<div class="modal-body">
				<table class="table table-hover">
				<tbody>
					<tr>
						<th>Position: </th>
						<td>Founder</td>
					</tr>
					<tr>
						<th>Email: </th>
						<td><i style="color: #339AF0" class="fa fa-envelope"></i>&nbsp;&nbsp;chhoung-rupp.com</td>
					</tr>
					<tr>
						<th>Nationality: </th>
						<td>Cambodain&nbsp;&nbsp;<img src="images/cambodia.png"></td>
					</tr>
					<tr>
						<th>Age: </th>
						<td>23</td>
					</tr>
					<tr>
						<th>Study: </th>
						<td><img style="width: 20px; height: 20px" src="images/rupp.png">&nbsp;&nbsp;Royal University of Phnom Penh</td>
					</tr>
					<tr>
						<th>Major: </th>
						<td>Computer Science</td>
					</tr>
					<tr>
						<th>Generate: </th>
						<td>21st</td>
					</tr>
					</tbody>
				</table>
				</div>
			</div>
			</div>
		</div>
		<!-- End Modal -->

		<!-- Modal -->
		<div class="modal fade" id="heng" role="dialog">
			<div class="modal-dialog">
			
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Hok Chanheng</h4>
				</div>
				<div class="modal-body">
				<table class="table table-hover">
				<tbody>
					<tr>
						<th>Position: </th>
						<td>Founder</td>
					</tr>
					<tr>
						<th>Email: </th>
						<td><i style="color: #339AF0" class="fa fa-envelope"></i>&nbsp;&nbsp;heng-rupp.com</td>
					</tr>
					<tr>
						<th>Nationality: </th>
						<td>Cambodain&nbsp;&nbsp;<img src="images/cambodia.png"></td>
					</tr>
					<tr>
						<th>Age: </th>
						<td>22</td>
					</tr>
					<tr>
						<th>Study: </th>
						<td><img style="width: 20px; height: 20px" src="images/rupp.png">&nbsp;&nbsp;Royal University of Phnom Penh</td>
					</tr>
					<tr>
						<th>Major: </th>
						<td>Computer Science</td>
					</tr>
					<tr>
						<th>Generate: </th>
						<td>21st</td>
					</tr>
					</tbody>
				</table>
				</div>
			</div>
			</div>
		</div>
		<!-- End Modal -->

		<!-- Modal -->
		<div class="modal fade" id="minea" role="dialog">
			<div class="modal-dialog">
			
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Hoeng Minea</h4>
				</div>
				<div class="modal-body">
				<table class="table table-hover">
				<tbody>
					<tr>
						<th>Position: </th>
						<td>Founder</td>
					</tr>
					<tr>
						<th>Email: </th>
						<td><i style="color: #339AF0" class="fa fa-envelope"></i>&nbsp;&nbsp;minea-rupp.com</td>
					</tr>
					<tr>
						<th>Nationality: </th>
						<td>Cambodain&nbsp;&nbsp;<img src="images/cambodia.png"></td>
					</tr>
					<tr>
						<th>Age: </th>
						<td>22</td>
					</tr>
					<tr>
						<th>Study: </th>
						<td><img style="width: 20px; height: 20px" src="images/rupp.png">&nbsp;&nbsp;Royal University of Phnom Penh</td>
					</tr>
					<tr>
						<th>Major: </th>
						<td>Computer Science</td>
					</tr>
					<tr>
						<th>Generate: </th>
						<td>21st</td>
					</tr>
					</tbody>
				</table>
				</div>
			</div>
			</div>
		</div>
		<!-- End Modal -->

		<!-- Modal -->
		<!-- <div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog"> -->
			
			<!-- Modal content-->
			<!-- <div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Kang Kimchhay</h4>
				</div>
				<div class="modal-body">
				<table class="table table-hover">
				<tbody>
					<tr>
						<th>Position: </th>
						<td>Founder</td>
					</tr>
					<tr>
						<th>Email: </th>
						<td>chhay-rupp.com</td>
					</tr>
					<tr>
						<th>Nationality: </th>
						<td>Cambodain&nbsp;&nbsp;<img src="images/cambodia.png"></td>
					</tr>
					<tr>
						<th>Age: </th>
						<td>21</td>
					</tr>
					<tr>
						<th>Study: </th>
						<td>Royal University of Phnom Penh</td>
					</tr>
					<tr>
						<th>Generate: </th>
						<td>21st</td>
					</tr>
					</tbody>
				</table>
				</div>
			</div>
			</div>
		</div> -->
		<!-- End Modal -->
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>