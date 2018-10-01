<style type="text/css">
	.abc{
		color: #fff;
		font-size: 25px;
		font-weight: normal;
	}
</style>

<nav class="navbar navbar-inverse" style="margin-bottom: 0px !important;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="#" class="navbar-brand">Billing</a>
        <button class="navbar-toggle" data-toggle="collapse" data-target="#myMenu">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="myMenu" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="http://www.vinodraigroup.com/index.php/home/index"><i class="fas fa-home"></i> Home</a></li>
        </ul>
      </div>
    </div>
</nav>
<div class="limiter">
	<div class="container-login100" style="background-image: url('../images/iu-1.jpeg'); align-items : flex-start ; justify-content: right;">
		<div class="container">
			<form action="<?php echo site_url('admin/addbill') ?>" method="post">
				<div class="row">
					<div class="col-md-6 col-md-offset-3"> 
						<table class="lineTbl">
							<tr>
								<td>
									<div class="form-group">
										<label class="abc">Date</label>
										<input type="date" class="form-control" name="date">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="form-group">
										<div class="row">
											<div class="col-md-6 col-sm-6 col-xs-6">
												<label class="abc">Product</label>
												<input type="text" placeholder="Product Here" class="form-control" name="product[]">
											</div>
											<div class="col-md-3 col-sm-3 col-xs-3">
												<label class="abc">Qty</label>
												<input type="text" placeholder="Qty" class="form-control" name="qty[]">
											</div>
											<div class="col-md-3 col-sm-3 col-xs-3">
												<label class="abc">Amt</label>
												<input type="text" placeholder="Amt" class="form-control" name="amt[]">
											</div>
										</div>
									</div>
								</td>
							</tr>
						</table>
						<input type="hidden" id="tid" value="" name="tid">
							<p class="btn btn-primary" onclick="AddNewTr()">+</p>
							<button type="submit" class="btn btn-success">Add Bill</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
