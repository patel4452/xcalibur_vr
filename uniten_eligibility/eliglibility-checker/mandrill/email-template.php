<?php include("header.php");?>
<?php
if(isset($_GET['cmd'])) {
	$cmd=$_GET['cmd'];
	$id=$_GET['id'];
	if($cmd=='Del') {
		$sq="delete from pt_slider where id=".$id;
		$qr=mysql_query($sq);
	}
}
?>
	<section id="main-content">
        <section class="wrapper">
			<div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<form class="cmxform form-horizontal tasi-form" id="" method="post" action="sliderdelete.php">
						<section class="panel">
							<header class="panel-heading">
								<h4>Sliders List</h4>
								<div class="xtra_btn_top">
									<span class="btn btn-warning tooltips chk_all" title="SELECT ALL" data-placement="bottom" data-toggle="tooltip">
										<input type="checkbox" class="checkall"> Select all
									</span>
									<a title="NEW" data-placement="bottom" data-toggle="tooltip" class="btn btn-info tooltips" href="addnew-emailtemplate.php">New</a>
									<?php
										if($_SESSION['permission']==2 || $_SESSION['permission']=='admin') {
									?>
									<button title="DELETE" data-placement="bottom" data-toggle="tooltip" class="btn btn-danger tooltips" type="submit">Delete All</button>
									<?php
										}
									?>
								</div>
							</header>
							<div class="panel-body">
								<?php elmdu_show_msg(); ?>
								<section id="flip-scroll">
									<table class="display table table-bordered cf" id="dyntable">
										<thead>
											<tr>
												<th>&nbsp;</th>
												<th>S.no</th>
												<th>Slider Image</th>
												<th>Slider Text</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
										<?php
											$sql="select * from pt_emailtemplate order by etempid DESC";
											$query=mysql_query($sql);
											$i=1;
											while($result=mysql_fetch_array($query)) {
										?>		
										<tr>
											<td class="text-center">
												<span class="center">
													<input type="checkbox" class="check_all_box" value="<?php echo $result["id"];?>" name="check[]">
												</span>
											</td>
											<td><?php echo $i;?></td>
											<td class="text-center"><img src="../<?php echo $result['slider_image'];?>" alt="" class="img-responsive img-thumbnail small_img"></td>
											<td class="text-center"><?php echo substr($result['slide_text'],0,100);?></td>
											<td class="text-center"><a class="block_tip tooltips" title="EDIT" data-placement="top" data-toggle="tooltip" href="slider_edit.php?id=<?php echo $result['id'];?>"><i class="fa-edit"></i></a>
											<?php
												if($_SESSION['permission']==2 || $_SESSION['permission']=='admin') {
											?>
											<a class="block_tip tooltips" title="DELETE" data-placement="top" data-toggle="tooltip" href="slider_list.php?cmd=Del&id=<?php echo $result['id'];?>" onclick="return del();"><i class="fa-times"></i></a></td>
											<?php
												}
											?>
										</tr>
										<?php $i++; } ?>
										</tbody>
									</table>
								</section>
							</div>
							<footer class="panel-footer">
								<div class="xtra_btn_bottom">
									<span class="btn btn-warning tooltips chk_all" title="SELECT ALL" data-placement="top" data-toggle="tooltip">
										<input type="checkbox" class="checkall"> Select all
									</span>
									<a title="NEW" data-placement="top" data-toggle="tooltip" class="btn btn-info tooltips" href="slider.php">New</a>
									<?php
										if($_SESSION['permission']==2 || $_SESSION['permission']=='admin') {
									?>
									<button title="DELETE" data-placement="top" data-toggle="tooltip" class="btn btn-danger tooltips" type="submit">Delete All</button>
									<?php
										}
									?>
								</div>
							</footer>
						</section>
					</form>
                </div>
            </div>
		</section>
	</section>
<?php include("footer.php");?>