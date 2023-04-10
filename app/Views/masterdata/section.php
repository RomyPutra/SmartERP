<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SmartERP</title>
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link type="text/css" href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" />
	<!-- <style>
	.dataTables_Filter{
        float: left;
		text-align: right;
		position: absolute;
    }
	</style> -->
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=base_url('/plugins/fontawesome-free/css/all.min.css')?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url('/dist/css/adminlte.min.css')?>"> </head>

<body class="dark-mode sidebar-mini layout-footer-fixed sidebar-collapse text-sm layout-fixed">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item"> <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a> </li>
				<li class="nav-item d-none d-sm-inline-block"> <a href="" class="nav-link">Home</a> </li>
			</ul>
			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
			</ul>
		</nav>
		<!-- /.navbar -->
		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<!-- <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a> -->
			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image"> <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> </div>
					<div class="info"> <a href="<?= base_url('page/login') ?>" class="d-block">Mukhammad Fauzi</a> </div>
				</div>
				<!-- SidebarSearch Form -->
				<div class="form-inline">
					<div class="input-group" data-widget="sidebar-search">
						<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
						<div class="input-group-append">
							<button class="btn btn-sidebar"> <i class="fas fa-search fa-fw"></i> </button>
						</div>
					</div>
				</div>
				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item">
							<a href="#" class="nav-link"> <i class="nav-icon fas fa-database"></i>
								<p> Master Data <i class="right fas fa-angle-left"></i> </p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('masterdata/hpp') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>HPP</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/skemapayroll') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Skema Payroll</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/employee') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Employee</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/schedulepattern') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Schedule Pattern</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/employeegroupshift') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Employee Group Shift</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/benefit') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Benefit</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/indexretur') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Index Retur</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/wholesaleprice') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Wholesale Price</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/days') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Days</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/umk') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>UMK</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/company') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Company</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/department') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Department</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/position') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Position</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/section') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Section</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/source') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Source</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/warehouse') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Warehouse</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/type') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Type</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/category') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Category</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/machine') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Machine</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/salesperson') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Sales Person</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/price') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Price</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/inventory') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Inventory</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/uom') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>UOM</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('masterdata/rate') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Rate</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link"> <i class="nav-icon fas fa-credit-card"></i>
								<p> Payroll <i class="fas fa-angle-left right"></i> </p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('payroll/fingerprint') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>FingerPrint</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('payroll/absence') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Absence</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('payroll/monthlysalary') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Monthly Salary</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('payroll/daylysalary') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Dayly Salary</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link"> <i class="nav-icon fas fa-fax"></i>
								<p> Accounting <i class="fas fa-angle-left right"></i> </p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('accounting/neraca') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Neraca</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('accounting/profitandloss') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Profit and Loss</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('accounting/mutasistock') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Mutasi Stock</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link"> <i class="nav-icon fas fa-balance-scale"></i>
								<p> HPP <i class="fas fa-angle-left right"></i> </p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('hpp/hpp') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>HPP</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link"> <i class="nav-icon fas fa-truck"></i>
								<p> Makloon <i class="fas fa-angle-left right"></i> </p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('makloon/sparepartmitra') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Sparepart Mitra</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link"> <i class="nav-icon fas fa-receipt"></i>
								<p> Purchasing <i class="fas fa-angle-left right"></i> </p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('purchashing/purchasingrequisition') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Purchashing Requisition</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('purchashing/purchasingorder') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Purchashing Order</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('purchashing/materialreceivedvoucher') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Material Received Voucher</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('purchashing/purchasereturninventory') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Purchase Return Inventory</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('purchashing/mrvinventory') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>MRV Inventory</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('purchashing/mrvpurchinvoice') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>MRV Purch Invoice</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link"> <i class="nav-icon fas fa-industry"></i>
								<p> Production <i class="fas fa-angle-left right"></i> </p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('production/production') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Production</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('production/smiv') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>SMIV</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('production/smrv') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>SMRV</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('production/packinglist') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Packing List</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('production/bom') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>BOM</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('production/mixing') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Mixing</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('production/extruder') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Extruder</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('production/cutting') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Cutting</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('production/printing') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Printing</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('production/dkp') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>DKP</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('production/progresscontrol') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Progress Control</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('production/progressop') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Progress OP</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('production/adjusmentwip') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Adjustment WIP</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('production/stockwip') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Stock WIP</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('production/materialneeded') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Material Needed</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('production/bonproduction') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Bon Production</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('production/deposit') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Deposit / Retur</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('production/customprice') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Custom Price</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link"> <i class="nav-icon fas fa-users"></i>
								<p> Sales <i class="fas fa-angle-left right"></i> </p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('sales/salesorder') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Sales Order</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('sales/sppb') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>SPPB</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('sales/shipping') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Shipping</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('sales/shippingcashinventroy') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Shipping Cash Inventory</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('sales/invoice') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Invoice</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('sales/shippinginventroy') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Shipping Inventory</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('sales/sop') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>SOP</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('sales/returnbarcode') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Return Barcode</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('sales/returninventory') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Return Inventory</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link"> <i class="nav-icon fas fa-chart-pie"></i>
								<p> Stock Opname <i class="fas fa-angle-left right"></i> </p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('stockopname/stockopname') ?>" class="nav-link"> <i class="far fa-circle nav-icon"></i>
										<p>Stock Opname</p>
									</a>
								</li>
							</ul>
						</li>
						<!-- <li class="nav-item">
               <a href="<?= base_url('page/icon') ?>" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Icon
                  </p>
               </a>
            </li> -->
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Master Data Section</h1> </div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Master Data Section</li>
							</ol>
						</div>
					</div>
				</div>
				<!-- /.container-fluid -->
			</section>
			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Section</h3> </div>
								<!-- /.card-header -->
								<div class="card-body">
									<div class="row">
										<div class="col-sm-10">
											<button type="button" data-toggle="modal" class="btn btn-primary" data-target="#modal-AddData">Add</button>
											<button type="submit" class="btn btn-primary">Edit</button>
											<button type="submit" class="btn btn-primary">Delete</button>
										</div>
										<!-- <div style="margin-left: auto;margin-right: 0;"> -->
                              			<!-- <div class="col-sm-2">
											<div id="example1_filter" class="dataTables_filter">
												<label>
													<input id="myInput" type="search" class="form-control form-control-sm" placeholder="Search" aria-controls="TableSection"> </label>
											</div>
										</div> -->
									</div>
									<br>
									<form id="frm-example" method="POST">
										<table id="TableSection" class="table table-bordered table-hover" data-toggle="table">
											<thead>
												<tr>
													<th></th>
													<th>Section ID</th>
													<th>Section Name</th>
													<th>User Name</th>
													<th>Date Record</th>
													<th>User Modified</th>
													<th>Date Modified</th>
												</tr>
											</thead>
											<tbody id="myTable">
											<?php if(count($Getsection) > 0): ?>
												<?php foreach ($Getsection as $dtsection): ?>
													<tr>
														<td><?php echo $dtsection['InternalID'];?></td>
														<td><?php echo $dtsection['SectionID'];?></td>
														<td><?php echo $dtsection['SectionName'];?></td>
														<td><?php echo $dtsection['UserName'];?></td>
														<td><?php echo $dtsection['DtRecord'];?></td>
														<td><?php echo $dtsection['UserModified'];?></td>
														<td><?php echo $dtsection['DtModified'];?></td>
													</tr>
												<?php endforeach; ?>
											<?php endif; ?>
											</tbody>
											<tfoot></tfoot>
										</table>
									</form>
								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container-fluid -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<!-- modal -->
		<form id="quickForm" novalidate>
			<div class="modal fade" id="modal-AddData" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Add Master Data Section</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label for="SectionID">Section ID</label>
								<input name="SectionID" type="SectionID" class="form-control" id="SectionID" placeholder="Enter Section ID"> </div>
							<div class="form-group">
								<label for="SectionName">Section Name</label>
								<input name="SectionName" type="SectionName" class="form-control" id="SectionName" placeholder="Enter Section Name"> </div>
						</div>
						<div class="modal-footer justify-content-between">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" id="my_button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
		</form>
		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<!-- <b>Version</b> 3.2.0 --></div>
			<!-- <strong>Copyright © 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved. --></footer>
		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->
	<!-- jQuery -->
	<script src="<?=base_url('/plugins/jquery/jquery.min.js')?>"></script>
	<!-- Bootstrap 4 -->
	<script src="<?=base_url('/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
	<!-- AdminLTE App -->
	<script src="<?=base_url('/dist/js/adminlte.min.js')?>"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?=base_url('plugins/sweetalert2/sweetalert2.min.js')?>"></script>
	<!-- Toastr -->
	<script src="<?=base_url('plugins/toastr/toastr.min.js')?>"></script>
	<script src="<?=base_url('plugins/jquery-validation/jquery.validate.min.js')?>"></script>
	<script src="<?=base_url('plugins/jquery-validation/additional-methods.min.js')?>"></script>
	<script src="<?=base_url('plugins/datatables/jquery.dataTables.min.js')?>"></script>
	<script src="<?=base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
	<script src="<?=base_url('plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
	<script src="<?=base_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
	<script src="<?=base_url('plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
	<script src="<?=base_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
	<script src="<?=base_url('plugins/jszip/jszip.min.js')?>"></script>
	<script src="<?=base_url('plugins/pdfmake/pdfmake.min.js')?>"></script>
	<script src="<?=base_url('plugins/pdfmake/vfs_fonts.js')?>"></script>
	<script src="<?=base_url('plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
	<script src="<?=base_url('plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
	<script src="<?=base_url('plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>
	<script type="text/javascript" src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>
	<script src="<?=base_url('plugins/datatables-buttons/js/dataTables.buttons.js')?>"></script>
	<script>
	$(function() {
		var Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 300
		});
		$.validator.setDefaults({
			submitHandler: function() {
				// alert( "Form successful submitted!" );
				$('#modal-AddData').modal('toggle'); //or  $('#IDModal').modal('hide');
				return false;
			}
		});
		$('.toastsDefaultSuccess').click(function() {
			$(document).Toasts('create', {
				class: 'bg-success',
				title: 'Successfull',
				subtitle: 'Add data section',
				body: 'data already added in master data section'
			})
		});
		$('#quickForm').validate({
			rules: {
				SectionID: {
					required: true
				},
				SectionName: {
					required: true
				},
			},
			messages: {
				SectionID: {
					required: "Please enter a SectionID"
				},
				SectionName: {
					required: "Please enter a SectionName"
				}
			},
			errorElement: 'span',
			errorPlacement: function(error, element) {
				error.addClass('invalid-feedback');
				element.closest('.form-group').append(error);
			},
			highlight: function(element, errorClass, validClass) {
				$(element).addClass('is-invalid');
			},
			unhighlight: function(element, errorClass, validClass) {
				$(element).removeClass('is-invalid');
			}
		});
		var table = $('#TableSection').DataTable({    
			 "lengthChange": false,
			 "dom": '<"top"i>rt<"bottom"flp><"clear">',
			 "searching": false,
			'columnDefs': [
				{
					'targets': 0,
					'checkboxes': {
					'selectRow': true
					}
				}
			],
			'select': {
				'style': 'multi'
			},
			'order': [[1, 'asc']],
			// 'buttons': [
            // { extend: "create", editor: editor },
            // { extend: "edit",   editor: editor },
            // { extend: "remove", editor: editor }
        	// ]
		});

		// $('#TableSection').DataTable({
		// 	"paging": true,
		// 	"lengthChange": false,
		// 	"searching": false,
		// 	"ordering": true,
		// 	"info": true,
		// 	"autoWidth": false,
		// 	"responsive": true,
		// 	"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
		// }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
	});
	// $(document).ready(function() {
	// 	$("#myInput").on("keyup", function() {
	// 		var value = $(this).val().toLowerCase();
	// 		$("#myTable tr").filter(function() {
	// 			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	// 		});
	// 	});
	// });
	</script>
</body>

</html>