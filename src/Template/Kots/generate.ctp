<?php $this->set("title", 'KOT | DOSA PLAZA'); 
$pass = $this->request->params['pass'];
$order=$pass[1]; 
?>
<style>
.minus{
	color: #FFF; background-color: #FA6775;padding: 0px 5px;font-size:15px;cursor: pointer; font-weight: bold;
} 
.plus{
	color: #FFF; background-color: #2d4161de;padding: 0px 5px;font-size:15px;cursor: pointer;font-weight: bold;
}
.minusOld{
	color: #FFF; background-color: #FA6775;padding: 0px 5px;font-size:15px;cursor: pointer; font-weight: bold;
} 
.plusOld{
	color: #FFF; background-color: #2d4161de;padding: 0px 5px;font-size:15px;cursor: pointer;font-weight: bold;
}


.closeCustomerBox2{
	color: #000; background-color: #E6E7E8; padding: 7px 14px;font-size:12px;cursor: pointer;margin-right: 2px; 
}
.commentString{
    background-color: #2d4161;
    padding:  5px;
    border-radius:  5px;
    color:  #FFF;
    margin-right:  5px;
    cursor:  pointer;
}
.commentStringOld{
    background-color: #2d4161;
    padding:  5px;
    border-radius:  5px;
    color:  #FFF;
    margin-right:  5px;
    cursor:  pointer;
}
.commentStringKOT{
    background-color: #2d4161;
    padding:  5px;
    border-radius:  5px;
    color:  #FFF;
    margin-right:  5px;
    cursor:  pointer;
}
.closeCommentBox{
	color: #000; background-color: #E6E7E8; padding: 7px 14px;font-size:12px;cursor: pointer;margin-right: 2px; 
}
.saveComment{
	color: #FFF; background-color: #FA6775; padding: 7px 14px;font-size:12px;cursor: pointer;margin-left: 2px;
}
.closePopup{
	color: #000; background-color: #E6E7E8; padding: 7px 14px;font-size:12px;cursor: pointer;margin-right: 2px; 
}
.closeViewKot{
	color: #000; background-color: #E6E7E8; padding: 7px 14px;font-size:12px;cursor: pointer;margin-right: 2px;position: absolute; right: -12px; bottom: 2px;
}
.CancelBill{
	color: #000; background-color: #E6E7E8; padding: 7px 14px;font-size:12px;cursor: pointer;margin-right: 2px;
}
.SubmitBill{
	color: #FFF; background-color: #FA6775; padding: 7px 14px;font-size:12px;cursor: pointer;margin-left: 2px;
}

.AddItemBtn{
	color: #FFF; background-color: #FA6775; padding: 9px 18px;font-size:12px;cursor: pointer;
}
.CreateKOT{
	color: #FFF; background-color: #FA6775; cursor: pointer;font-size:12px;
}
.ViewAllKOT{
	color: #FFF; background-color: #FA6775; padding: 7px 14px;cursor: pointer;font-size:12px;
}
.KOTComment{
	color: #000; background-color: #F5F5F5; cursor: pointer;margin-right: 8px;font-size:10px;
}
.CreateBill{
	color: #FFF; background-color: #2D4161; font-size:15px;background-color: #2d4161 !important;
}
.Taxbutn{
	color: #FFF; background-color: #2D4161; padding: 7px 14px;cursor: pointer;margin-right: 8px;font-size:12px;
}
.disPer{
	width: 25px;height: 20px;
	text-align: center;margin: 0;
}
.disAmt{
	width: 25px;height: 20px;
	text-align: center;margin: 0;
}
</style>
<!-- <?= $this->element('header'); ?> -->
<div style="background: #EBEEF3;">
	<input type="hidden"  id="tableInput" value="<?php echo $table_id; ?>" />
	
	<div class="row KOTView" style="padding:1px 0px;">
		<div class="col-md-12">
			<table width="100%">
				<tr>
					<td valign="top" width="60%" style=" padding: 0px 2px; ">
						<div style=" background-color: #FFF; border-radius: 8px !important;">

							<table width="100%">
								<tr>
									<td style="padding-bottom: 5px; border-bottom: solid 1px #CCC;height: 300px;" valign="top">
										<table width="100%">
											<tr>
												<td>
													<button type="button" style=" width: 15px; height: 100px; " id="slideLeft" currentpage="0">  <i class="fa fa-chevron-left" style="color: #2d4161;margin: -3px;font-size: 10px;"></i> </button>
												</td>
												<td>
													<div style="max-height:375px; height:375px;" id="ItemArea" >
														
													</div>	
												</td>
												<td>
													<button type="button" style=" width: 15px; height: 100px; " id="slideRight" currentpage="1">  <i class="fa fa-chevron-right" style="color: #2d4161;margin: -3px;font-size: 10px;"></i> </button>
												</td>
											</tr>
										</table>
									
									</td>
								</tr>
								<tr>
									<td style="padding-top: 5px;padding-bottom: 5px; border-bottom: solid 1px #CCC;" valign="top">
										<span style="color:#373435;font-weight: bold;margin: 3px;">CHOOSE SUB CATEGORY</span><br/>
										<div id="SubCategoryArea" >
										</div>
									</td>
								</tr>
								<tr>
									<td style="padding-top: 5px;border-bottom: solid 1px #CCC; " valign="top">
										<span style="color:#373435;font-weight: bold;margin: 3px;">CHOOSE CATEGORY</span><br/>
										<div>
											<div id="CategoryArea" >
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td style="padding:10px;padding-top: 5px; text-align: center;" valign="top">
										<br/>
										<a href="javascript:void(0)" class="fvtr" style="margin: 3px; padding: 5px 10px; background-color: #f0b11b; border-radius: 5px; color: #FFF; font-weight: 400;text-decoration: none;">FAVORITES</a>
									</td>
								</tr>
							</table>
							<div style="display: none;">
								<?php 
								$fz=1; $fzx=0;

								
								foreach($ItemCategories as $ItemCategory){ ?>
									<div class="ItemCategoryBox" category_id="<?= h($ItemCategory->id) ?>" >
										<?= h($ItemCategory->name) ?>
									</div>
									
									<div  category_id="<?= h($ItemCategory->id) ?>">
									<?php foreach($ItemCategory->item_sub_categories as $item_sub_category){ ?>
										<div class="ItemSubCategoryBox" category_id="<?= h($ItemCategory->id) ?>" sub_category_id="<?= h($item_sub_category->id) ?>" >
											<?= h($item_sub_category->name) ?>
										</div>
										
										<div  sub_category_id="<?= h($item_sub_category->id) ?>">
										<?php 
										$z=1; $zx=0; 
										foreach($item_sub_category->items as $item){ 
											$zx++;
											if($zx==25){ $zx=1; $z++; }

											if($item->is_favorite==1){
												$fzx++;
												if($fzx==25){ $fzx=1; $fz++; }
												$fav_attr='fav_display_no='.$fz;
											}else{
												$fav_attr='';
											}
											
										?>
											<span class="ItemBox" sub_category_id="<?= h($item_sub_category->id) ?>" item_id="<?= h($item->id) ?>" item_name="<?= h($item->name) ?>" rate="<?= h($item->rate) ?>" is_favorite="<?php echo (int)$item->is_favorite; ?>" display_no="<?php echo $z; ?>" <?php echo $fav_attr; ?>  style="background-color: <?php echo $item->color ?>" gst_per="<?= h($item->tax->tax_per) ?>" >
												<?= h($item->name) ?>
												[<?= h($item->rate) ?>]<br/>
												<p style="font-size:9px;line-height: 10px">
													<?php if($item->description){ echo '('; } ?>
													<?= h($item->description) ?>
													<?php if($item->description){ echo ')'; } ?>
												</p>
											</span>
										<?php } ?>
										</div>
									<?php } ?>
									</div>
									
								<?php } ?>
							</div>
						</div>
					</td>
					<?php echo $this->Form->input('dasds',['value' =>$order_type,'label' => false,'type'=> 'hidden','id'=>'order_type']);?>
					<td valign="top" width="40%" style=" padding: 0px 15px 0px 0px;">
						<div style=" background-color: #FFF; border-radius: 8px !important; padding: 0px 5px;">
							<div style="padding-top:12px">
								<table width="100%">
									<tr>
										<td width="70%" style="padding:0 10px 0 0;">
											<?php
											$options=array(); 
											foreach($Items as $Item){
												$options[]=['text' =>$Item->name, 'value' => $Item->id, 'rate' => $Item->rate, 'gst_per' => $Item->tax->tax_per];
											}
											
											echo $this->Form->input('item_sub_category_id',['options' =>$options,'label' => false,'class'=>'form-control select2me ItemDropDown','empty'=> ' ','autofocus','data-placeholder'=>'Search Item']);?>
										</td>
										<td width="20%" style="padding:0 10px 0 0;">
											<input type="text" class="form-control QtyCatcher" placeholder="Quantity" value="1">
										</td>
										<td width="10%" >
											<span class="AddItemBtn">ADD</span>
										</td>
									</tr>
								</table>
							</div>
							<div style="max-height:300px; height:300px; overflow-y:scroll;">
								<div style="padding-top:12px" >
									<table class="table table-striped table-bordered" id="kotBox" style="margin: 0;font-size: 12px;">
										<thead>
											<tr>
												<td style="text-align:center;width: 4%;">S.N.</td>
												<td style="">Name</td>
												<td style="text-align:center;width:70px;">Quantity</td>
												<td style="text-align:center;">Rate</td>
												<td style="text-align:center;">Amt</td>
												<td style="text-align:center;">Dis%</td>
												<td style="text-align:center;">Dis₹</td>
												<td style="text-align:center;">Cmt.</td>
												<td></td>
											</tr>
										</thead>
										<tbody>
										
										</tbody>
										<tfoot>
											<tr style=" border-top: solid 1px #CCC; border-bottom: solid 1px #CCC; ">
												<td colspan="2" style="padding:0;">
													<table>
														<tr>
															<td>
																<input type="text" name="offer_code" placeholder="OFFER CODE" style="text-transform:uppercase">
															</td>
															<td>
																<button type="button" class="apply">APPLY</button style="margin: 0">
															</td>
														</tr>
													</table>
													<div id="offerShow"></div>
												</td>
												<td style="text-align:right;" colspan="3"> Overall Discount</td>
												<td align="center"> 
													<input type="text" style="width:25px; height:20px; text-align:center;" id="overalldis">
												</td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
										</tfoot>
									</table>

									

									<div id="overallComnt" style="text-align: center;"></div>
									<div align="center" style="margin-top: 10px;">
										<textarea id="oneComment" style="display: none;"></textarea>
										<a href="javascript:void(0)" class="KOTComment btn default btn-sm" >KOT COMMENT</a>
									</div>
								</div>
								
							</div>
							
							
							<hr style="margin-bottom: 2px; "></hr> 
						</div>
						<div style="background-color: #FFF; border-radius: 8px !important; padding: 0px 5px; margin-top:3px">
							<div style="padding-top:4px">
								<table width="100%" border="0">
								<tr>
									<td width="60%" style="border-right:5px solid #f5f5f5;" valign="top">
											<table width="100%" style="display: none;">
												<tr>
													<td style="padding-right: 5px;" width="40%">
														<?php echo $this->Form->input('customer_id',['options' =>$Customers,'label' => false,'class'=>'form-control input-medium input-sm select2me ','empty'=> 'Search']);?>
													</td>
													<td style="padding-right: 2px; text-align: center;" width="5%">
														<button type="button" class="btn btn-danger btn-sm" id="LinkCustomer"><i class="fa fa-check"></i></button>
													</td>
													<td style="padding-right: 0px; text-align: center;" width="5%">
														<button type="button" class="btn btn-danger btn-sm" id="NewCustomer"><i class="fa fa-plus" ></i></button>
													</td>
												</tr>
											</table>
											<table width="100%" id="newCustomerTable" style="display:block;">
												<tr>
													<td style="padding-right: 5px;width: 40%;" width="40%">
														<?php echo $this->Form->input('customer_name',['label' => false,'class'=>'form-control  input-sm ', 'placeholder' => 'Name']);?>
													</td>
													<td style="padding-right: 5px;width: 40%;" width="40%">
														<?php echo $this->Form->input('customer_mobile',['label' => false,'class'=>'form-control input-sm ', 'placeholder' => 'Mobile', 'autocomplete' => 'off']);?>
													</td>
													<td>
														<button type="button" class="btn btn-danger btn-sm" id="FetchCusInfo">Save</button>
													</td>
												</tr>
												<?php if($order_type=="delivery"){ ?>
													<tr>
														<td colspan="2">
															<textarea class="form-control" id="customer-address" placeholder="Address"></textarea>
														</td>
													</tr>
												<?php } ?>
											</table>
											<div id="customerSection"></div>
											<?php if($order_type=="takeaway"){ ?>
												<table width="70%"> 
													<tr>
														<td>
															<label class="radio-inline"><input type="radio" name="payment_type" value="cash" checked> Cash  </label>
														</td>
														<td>
															<label class="radio-inline"><input type="radio" name="payment_type" value="card"> Card  </label>
														</td>
														<td>
															<label class="radio-inline"><input type="radio" name="payment_type" value="paytm"> Paytm </label>
														</td>
													</tr>
												</table>
											<?php } ?>


										<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
										<script src="//code.jquery.com/jquery-1.10.2.js"></script>
										<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

										
										<script>
										  $(function() {
										    function log( message ) {
										      $( "<div>" ).text( message ).prependTo( "#log" );
										      $( "#log" ).scrollTop( 0 );
										    }

										    $( "#customer-mobile" ).autocomplete({
										      source: function( request, response ) {
										      	var url="<?php echo $this->Url->build(['controller'=>'Customers','action'=>'autocompleteCustomers']); ?>";
										        $.ajax({
										          url: url,
										          dataType: "json",
										          data: {
										            q: request.term
										          },
										          success: function( data ) {
										            response( data );
										          },
										          error: function(e){
										          	console.log(e.responseText);
										          }
										        });
										      },
										      minLength: 1,
										      select: function( event, ui ) {
										        log( ui.item ?
										          "Selected: " + ui.item.label :
										          "Nothing selected, input was " + this.value);
										        
										      },
										      open: function() {
										        $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
										      },
										      close: function() {
										      	var str = $("#customer-mobile").val();
										        var res = str.split("-");
										        var name = res[0];
										        $('#customer-name').val(name);
										        var mobile = res[1];
										        $('#customer-mobile').val(mobile);

										        $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
										      }
										    });
										  });
										</script>
										
									</td>
									<td width="40%" valign="top">
										<table width="95%" style="margin-left:2%"  border="0">
											<tr>
												<td height="25px" ><b>Total :</b></td>
												<td width="35%">
													<b>&#8377;</b><b id="taxableValBox">   </b>
												</td>
											</tr>
											<tr>
												<td height="25px" ><b>Tax :</b></td>
												<td width="35%">
													<span data-target="#deletemodal" data-toggle='modal' class="Taxbutn">
														<b> &#8377;</b>
														<b id="gstAmtBox">  </b>
													</span>
												</td>
											</tr>
											<tr>
												<td height="25px" ><b>Round off :</b></td>
												<td width="35%">
													<b> &#8377;</b>
													<b id="rounfOffBox">  </b>
												</td>
											</tr>
											<tr style="background:#eee">
												<td height="25px" ><b>Net :</b></td>
												<td width="35%">
													<b> &#8377;</b>
													<b id="netBox">  </b>
												</td>
											</tr>
											<tr>
												<td colspan="2" height="35px">
													<?php
													echo $this->Form->input('employee_id',['options'=>$Employees,'class'=>'form-control input-sm select2 employee_id','empty' => '--Select Captain--','label'=>false,'required'=>'required','value'=>@$employee_id,'id'=>'employee_id']);
													?>
												</td>
											</tr>
											<tr>
												<td colspan="2">
													<div style="padding-top:20px;width:100%"  align="center">
														<a href="javascript:void()" class="CreateBill btn blue-hoki " align="center"><i class="fa fa-rupee "></i>: GENERATE BILL (F2) </a>
														</br></br> 
													</div>
												</td>
											</tr>
										</table>
									</td>
								</tr>			
		   
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
<style> 
#kotBox td{
	padding:2px 0px;
}
.tblBox{
	width: 240px; margin: 10px;
	background-color: #FFF;
    padding: 7px;
    border-radius: 7px !important;
	position: relative;
	margin-bottom:25px;
	display: inline-block;
}
.tblLabel{
	position: absolute;
    top: -15px;
    left: 15px;
    padding: 7px 6px;
    background-color: #FA6E58;
    color: #FEFEFE;
    border-radius: 5px !important;
    font-weight: bold;
}
.tblBox:hover{
	cursor: pointer;
}
.ItemCategoryBox{
    text-align: center;
    border: solid 1px;
    float: left;
    font-size: 12px;
    padding: 8px 16px;
	margin: 3px;
	cursor: pointer;
	background-color:#2D4161;
	color:#FFF;
	border-radius: 5px !important;
	text-align: center;
}

.activeMain{
	background-color: #FA6775;
    color: #FFF;
}

.ItemSubCategoryBox{
    border: solid 1px;
    float: left;
    font-size: 12px;
    padding: 8px 16px;
	margin: 3px;
	cursor: pointer;
	background-color:#848688;
	color:#FFF;
	border-radius: 5px !important;
	text-align: center;
}

.activeSub{
	background-color: #6FB98F;
    color: #FFF;
}


.ItemBox{
    width: 100px;
    height: 90px;
    float: left;
    font-size: 12px;
    padding: 2px 2px;
    margin: 3px;
    cursor: pointer;
    border: solid 1px #d6d6d6;
    background-color: #F5F5F5;
    color: #474445;
    border-radius: 5px !important;
    text-align: center;
}

#BackToTables{
	color: #504358;
	font-size: 14px;
	cursor: pointer
}
#TablesHeading, #KOTHeading{
	color: #f16969;
	font-size: 16px;
}
#billTable{
	tr td{
		padding:2px;
	}
}
.qty{
	width: 50px;
    height: 20px;
    text-align: center; 
}
</style>

<!-- BEGIN PAGE LEVEL STYLES -->
	<!-- BEGIN COMPONENTS PICKERS -->
	<?php echo $this->Html->css('/assets/global/plugins/clockface/css/clockface.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/bootstrap-datepicker/css/datepicker3.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/bootstrap-colorpicker/css/colorpicker.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<!-- END COMPONENTS PICKERS -->

	<!-- BEGIN COMPONENTS DROPDOWNS -->
	<?php echo $this->Html->css('/assets/global/plugins/bootstrap-select/bootstrap-select.min.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/select2/select2.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<?php echo $this->Html->css('/assets/global/plugins/jquery-multi-select/css/multi-select.css', ['block' => 'PAGE_LEVEL_CSS']); ?>
	<!-- END COMPONENTS DROPDOWNS -->
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
	<!-- BEGIN COMPONENTS PICKERS -->
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/clockface/js/clockface.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-daterangepicker/moment.min.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<!-- END COMPONENTS PICKERS -->

	<!-- BEGIN COMPONENTS DROPDOWNS -->
	<?php echo $this->Html->script('/assets/global/plugins/bootstrap-select/bootstrap-select.min.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/select2/select2.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<?php echo $this->Html->script('/assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js', ['block' => 'PAGE_LEVEL_PLUGINS_JS']); ?>
	<!-- END COMPONENTS DROPDOWNS -->
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<!-- BEGIN COMPONENTS PICKERS -->
	<?php echo $this->Html->script('/assets/admin/pages/scripts/components-pickers.js', ['block' => 'PAGE_LEVEL_SCRIPTS_JS']); ?>
	<!-- END COMPONENTS PICKERS -->

	<!-- BEGIN COMPONENTS DROPDOWNS -->
	<?php echo $this->Html->script('/assets/global/scripts/metronic.js', ['block' => 'PAGE_LEVEL_SCRIPTS_JS']); ?>
	<?php echo $this->Html->script('/assets/admin/layout/scripts/layout.js', ['block' => 'PAGE_LEVEL_SCRIPTS_JS']); ?>
	<?php echo $this->Html->script('/assets/admin/layout/scripts/quick-sidebar.js', ['block' => 'PAGE_LEVEL_SCRIPTS_JS']); ?>
	<?php echo $this->Html->script('/assets/admin/layout/scripts/demo.js', ['block' => 'PAGE_LEVEL_SCRIPTS_JS']); ?>
	<?php echo $this->Html->script('/assets/admin/pages/scripts/components-dropdowns.js', ['block' => 'PAGE_LEVEL_SCRIPTS_JS']); ?>

	<?php echo $this->Html->script('/js/mobile1.4.5.min.js', ['block' => 'MOBILE_JS']); ?>
	<?php echo $this->Html->script('/js/shortcut.js', ['block' => 'MOBILE_JS']); ?>
	<!-- END COMPONENTS DROPDOWNS -->
<!-- END PAGE LEVEL SCRIPTS -->
<?php echo $this->Html->css('/assets/animate.css', ['block' => 'PAGE_LEVEL_CSS']); ?>




<?php
	$waitingMessage='<div align=center><br/><i class="fa fa-gear fa-spin" style="font-size:50px"></i><br/><span style="font-size: 18px; font-weight: bold;">Submitting...</span></div>';
	$waitingMessage2='<div align=center><br/><i class="fa fa-gear fa-spin" style="font-size:50px"></i><br/><span style="font-size: 18px; font-weight: bold;">Loading...</span></div>';
	$successMessage='<div align=center><br/><span aria-hidden=true class=icon-check style="font-size:50px;color: #1AB696; font-weight: bold;"></span><br/><br/><span style="font-size: 18px; color: #727376; font-weight: bold;">KOT Created Successfully.</span><br/></div><div style="text-align:  center;margin-top: 20px;"><span class="closePopup">Close</span></div>';
	$BillSuccessMessage='<div align=center><br/><span aria-hidden=true class=icon-check style="font-size:50px;color: #096609; font-weight: bold;"></span><br/><span style="font-size: 18px; color: #096609; font-weight: bold;">Bill Created</span><div><button type="button" class="btn btn-primary closePopup">Close</button></div></div>';
	$errorMessage='<div align=center><br/><span aria-hidden=true class=icon-close style="font-size:50px;color: #ae0808; font-weight: bold;"></span><br/><span style="font-size: 18px; color: #ae0808; font-weight: bold;">Something went wrong.</span><div><button type="button" class="btn btn-primary closePopup">Close</button></div></div>';
	
	
	$js="
	$(document).ready(function() {
		var order_type=$('#order_type').val();
		var q=$('.ItemCategoryBox').clone();
		$('.ItemCategoryBox').remove();
		$('#CategoryArea').append(q);
		var q=$('.ItemSubCategoryBox').clone();
		$('.ItemSubCategoryBox').remove();
		$('#SubCategoryArea').append(q);
		var q=$('.ItemBox').clone();
		$('.ItemBox').remove();
		$('#ItemArea').html(q);
		
		$('.ItemSubCategoryBox').hide();
		$('.ItemBox').hide();
		
		$('#CategoryArea .ItemCategoryBox').first().show().addClass('activeMain');
		var category_id=$('#CategoryArea .ItemCategoryBox').first().attr('category_id');
		$('.ItemSubCategoryBox[category_id='+category_id+']').show();
		var sub_category_id=$('#SubCategoryArea .ItemSubCategoryBox[category_id='+category_id+']').first().attr('sub_category_id');
		$('#SubCategoryArea .ItemSubCategoryBox[category_id='+category_id+']').first().addClass('activeSub');
		$('.ItemBox[sub_category_id='+sub_category_id+']').show();
		
		$('.fvtr').die().live('click',function(event){
			$('#favStatus').val(1);
			$('#slideLeft').attr('currentPage',1);
			$('#slideRight').attr('currentPage',1);
			$('.ItemBox[is_favorite=0]').hide();
			$('.ItemBox[is_favorite=1]').show();

			$('.ItemBox').hide();
			$('.ItemBox[is_favorite=1][fav_display_no=1]').show();
		});



		var currentPage=1;
		var sub_category_id=$('#SubCategoryArea .activeSub').attr('sub_category_id');
		$('.ItemBox').hide();
		$('.ItemBox[sub_category_id='+sub_category_id+'][display_no='+currentPage+']').show();
		$('#slideLeft').attr('currentPage',currentPage);
		$('#slideRight').attr('currentPage',currentPage);
		
		$('#slideLeft').die().live('click',function(event){
			var currentPage=$(this).attr('currentPage');
			currentPage--;
			$('.ItemBox').hide();
			if( $('#favStatus').val() ==1 ){
				if($('.ItemBox[fav_display_no='+currentPage+']').length==0){
					var currentPage=1;
				}
				$('.ItemBox[is_favorite=1][fav_display_no='+currentPage+']').show();
			}else{
				var sub_category_id=$('#SubCategoryArea .activeSub').attr('sub_category_id');
				if($('.ItemBox[sub_category_id='+sub_category_id+'][display_no='+currentPage+']').length==0){
					var currentPage=1;
				}
				$('.ItemBox[sub_category_id='+sub_category_id+'][display_no='+currentPage+']').show();
			}

			$('#slideLeft').attr('currentPage',currentPage);
			$('#slideRight').attr('currentPage',currentPage);			
		});

		$('#slideRight').die().live('click',function(event){
			var currentPage=$(this).attr('currentPage');
			currentPage++;
			$('.ItemBox').hide();
			if( $('#favStatus').val() ==1 ){
				if($('.ItemBox[fav_display_no='+currentPage+']').length==0){
					var currentPage=currentPage-1;
				}
				$('.ItemBox[is_favorite=1][fav_display_no='+currentPage+']').show();
			}else{
				var sub_category_id=$('#SubCategoryArea .activeSub').attr('sub_category_id');
				if($('.ItemBox[sub_category_id='+sub_category_id+'][display_no='+currentPage+']').length==0){
					var currentPage=currentPage-1;
				}
				$('.ItemBox[sub_category_id='+sub_category_id+'][display_no='+currentPage+']').show();
			}

			$('#slideLeft').attr('currentPage',currentPage);
			$('#slideRight').attr('currentPage',currentPage);			
		});


		$('.ItemCategoryBox').die().live('click',function(event){
			$('.ItemCategoryBox').removeClass('activeMain');
			$(this).addClass('activeMain');
			var category_id=$(this).attr('category_id');
			$('.ItemSubCategoryBox').hide();
			$('.ItemSubCategoryBox[category_id='+category_id+']').show();
		});

		$('.ItemSubCategoryBox').die().live('click',function(event){
			$('#favStatus').val(0);
			$('.ItemSubCategoryBox').removeClass('activeSub');
			$(this).addClass('activeSub');
			var sub_category_id=$(this).attr('sub_category_id');
			$('.ItemBox').hide();
			$('.ItemBox[sub_category_id='+sub_category_id+'][display_no=1]').show();
			$('#slideLeft').attr('currentPage',1);
			$('#slideRight').attr('currentPage',1);
		});

		//--
		$('.plus').die().live('click',function(event){
			var qty = parseInt($(this).closest('td').find('span.qty').html());
			var news = qty+parseInt(1);
			$(this).closest('td').find('span.qty').html(' '+news+' ');
			amountcals();
		});
		$('.minus').die().live('click',function(event){
			var qty = parseInt($(this).closest('td').find('span.qty').html());
			if(qty !=1 ){
				var news = qty-parseInt(1);
				$(this).closest('td').find('span.qty').html(' '+news+' ');
				amountcals();
			}
		});


		$('.ItemBox').die().live('click',function(event){
			var item_id=$(this).attr('item_id');

			var c = $('table#kotBox tbody tr td[item_id='+item_id+']').length;
			if(c>0){
				var qt= $('table#kotBox tbody tr td[item_id='+item_id+']').closest('tr').find('td:nth-child(3) span.qty').text();

				$('table#kotBox tbody tr td[item_id='+item_id+']').closest('tr').find('td:nth-child(3) span.qty').text(' '+(++qt)+' ');
				amountcals();
				return;
			}

			var item_name=$(this).attr('item_name');
			var rate=$(this).attr('rate');
			var gst_per=$(this).attr('gst_per');
			var c=$('#kotBox tbody tr.mainKotTr').length;
			c=c+1;
			$('#kotBox').append('<tr row_no='+c+' gst_per='+gst_per+' class=mainKotTr><td style=text-align:center;>'+c+'</td><td item_id='+item_id+'>'+item_name+'</td><td style=text-align:center;><span class=\"minus\">-</span><span class=\"qty\"> 1 </span><span class=\"plus\">+</span></td><td style=\"text-align:center;padding: 5px;\">'+rate+'</td><td style=text-align:center;>'+rate+'</td><td style=\"padding:2px;\"><input type=text class=disPer /></td><td style=\"padding:2px;\"><input type=text class=disAmt /></td><td style=text-align:center;><i class=\"fa fa-ellipsis-h commentRow\" style=\"color: #BDBFC1; font-size: 18px; cursor: pointer;\"></i><textarea style=\"display:none;\" class=\"comment\"></textarea></td><td style=text-align:center;><i class=\"fa fa-trash-o removeRow\" style=\"color: #BDBFC1; font-size: 18px; cursor: pointer;\"></i></td></tr>');
			amountcals();
		});

		

		
		var openDropdawn=1;

		$('.ItemDropDown').keydown(function(event){
			if(openDropdawn > 1)
			{
				$('.select2-container').addClass('select2-container-active  select2-dropdown-open');
				$('.select2-focusser').prop('disabled',true);
			}
			
			$('.select2-drop-active').css('display','block');
			$('.select2-search').find('input').focus();

		});
		
		$('.QtyCatcher').keypress(function(event){
		    var keycode = (event.keyCode ? event.keyCode : event.which);
		    if(keycode == '13'){
		        var item_id=$('.ItemDropDown option:selected').val();
		        var gst_per=$('.ItemDropDown option:selected').attr('gst_per');

		        var c = $('table#kotBox tbody tr td[item_id='+item_id+']').length;
				if(c>0){
					var qt= $('table#kotBox tbody tr td[item_id='+item_id+']').closest('tr').find('td:nth-child(3) span.qty').text();

					$('table#kotBox tbody tr td[item_id='+item_id+']').closest('tr').find('td:nth-child(3) span.qty').text(' '+(++qt)+' ');
					
					$('.ItemDropDown').select2('val',''); 
					$('.ItemDropDown').focus();
					
					
					return;
				}


				var Qty=parseFloat($('.QtyCatcher').val());
				if(item_id && Qty){
					var item_name=$('.ItemDropDown option:selected').text();
					var rate=$('.ItemDropDown option:selected').attr('rate');
					
					var c=$('#kotBox tbody tr.mainKotTr').length;
					c=c+1; 
					$('#kotBox').append('<tr row_no='+c+' gst_per='+gst_per+' class=mainKotTr><td style=text-align:center;>'+c+'</td><td item_id='+item_id+'>'+item_name+'</td><td style=text-align:center;><span class=\"minus\">-</span><span class=\"qty\"> 1 </span><span class=\"plus\">+</span></td><td style=\"text-align:center;padding: 5px;\">'+rate+'</td><td style=text-align:center;>'+rate+'</td><td style=\"padding:2px;\"><input type=text class=disPer /></td><td style=\"padding:2px;\"><input type=text class=disAmt /></td><td style=text-align:center;><i class=\"fa fa-ellipsis-h commentRow\" style=\"color: #BDBFC1; font-size: 18px; cursor: pointer;\"></i><textarea style=\"display:none;\" class=\"comment\"></textarea></td><td style=text-align:center;><i class=\"fa fa-trash-o removeRow\" style=\"color: #BDBFC1; font-size: 18px; cursor: pointer;\"></i></td></tr>');
					amountcals();
				}

				$('.ItemDropDown').select2('val',''); 
				$('.ItemDropDown').focus();
		    }
		    openDropdawn++;
		});


		$('.AddItemBtn').die().live('click',function(event){
			
			var item_id=$('.ItemDropDown option:selected').val();
			var gst_per=$('.ItemDropDown option:selected').attr('gst_per');

			var c = $('table#kotBox tbody tr td[item_id='+item_id+']').length;
			if(c>0){
				var qt= $('table#kotBox tbody tr td[item_id='+item_id+']').closest('tr').find('td:nth-child(3) span.qty').text();

				$('table#kotBox tbody tr td[item_id='+item_id+']').closest('tr').find('td:nth-child(3) span.qty').text(' '+(++qt)+' ');
				$('.ItemDropDown').focus();
				$('.ItemDropDown').select2('val',''); 
				return;
			}


			var Qty=parseFloat($('.QtyCatcher').val());
			if(item_id && Qty){
				var item_name=$('.ItemDropDown option:selected').text();
				var rate=$('.ItemDropDown option:selected').attr('rate');
				
				var c=$('#kotBox tbody tr.mainKotTr').length;
				c=c+1; 
				$('#kotBox').append('<tr row_no='+c+' gst_per='+gst_per+' class=mainKotTr><td style=text-align:center;>'+c+'</td><td item_id='+item_id+'>'+item_name+'</td><td style=text-align:center;><span class=\"minus\">-</span><span class=\"qty\"> 1 </span><span class=\"plus\">+</span></td><td style=\"text-align:center;padding: 5px;\">'+rate+'</td><td style=text-align:center;>'+rate+'</td><td style=\"padding:2px;\"><input type=text class=disPer /></td><td style=\"padding:2px;\"><input type=text class=disAmt /></td><td style=text-align:center;><i class=\"fa fa-ellipsis-h commentRow\" style=\"color: #BDBFC1; font-size: 18px; cursor: pointer;\"></i><textarea style=\"display:none;\" class=\"comment\"></textarea></td><td style=text-align:center;><i class=\"fa fa-trash-o removeRow\" style=\"color: #BDBFC1; font-size: 18px; cursor: pointer;\"></i></td></tr>');
				amountcals();
			}

			$('.ItemDropDown').select2('val',''); 
			
		});
		
		$('.removeRow').die().live('click',function(event){
			$(this).closest('tr').remove();
			var c=0;
			$('#kotBox tbody tr.mainKotTr').each(function(){
				var item_id=$(this).attr('row_no',++c);
				var item_id=$(this).find('td:nth-child(1)').text(c);
			});
			calculateBill();
		});
		
		$('.closePopup').die().live('click',function(event){
			$('#WaitBox').hide();
		});
	
		$('.closeViewKot').die().live('click',function(event){
			$('#WaitBox4').hide();
		});

		$('.commentRow').die().live('click',function(event){
			var c=$(this).closest('tr').find('.comment').val();
			$('.commentContainor').val(c);
			var sr_no=$(this).closest('tr').attr('row_no');
			$('#rowSR').val(sr_no);
			$('#WaitBox5').show();
		});


		
		$('.CreateBill').die().live('click',function(event){
			
			event.preventDefault();
			
			var postData=[];

			var l= $('#kotBox tbody tr.mainKotTr').length;
			if(!l){
				alert('Select atleast one item.');
				return;
			}

			var emp_id = $('#employee_id option:selected').val();
			if(!emp_id){
				alert('Select captain.');
				$('#employee_id').focus();
				return;
			}

			$('#loading').show();
			$(this).text('Saving...');

			$('#kotBox tbody tr.mainKotTr').each(function(){
				var item_id=$(this).find('td:nth-child(2)').attr('item_id');
				var quantity=$(this).find('td:nth-child(3) span.qty').text();
				var rate=$(this).find('td:nth-child(4)').text();
				var amount=$(this).find('td:nth-child(5)').text();
				var comment=$(this).find('textarea.comment').val();
				var discount_per=$(this).find('td:nth-child(6) input').val();
				if(!discount_per){ discount_per=0;}
				var discount_amt=$(this).find('td:nth-child(7) input').val();
				if(!discount_amt){ discount_amt=0;}
				var percen=parseFloat($(this).attr('gst_per'));
				var net_amount=round( ((amount-discount_amt)*(100+percen))/100, 2 );
				postData.push({item_id : item_id, quantity : quantity, rate : rate, amount : amount, comment : comment, discount_per : discount_per, net_amount : net_amount, percen : percen, discount_amt : discount_amt}); 
			});
			var order_type=$('#order_type').val();
			var c_name=$('#customer-name').val();
			var c_mobile_no=$('#customer-mobile').val();
			var c_address=$('#customer-address').val();
			var employee_id=$('#employee_id option:selected').val();

			var offer_id=$('span.offer_id').text();

			var taxableVal = parseFloat( $('#taxableValBox').text() );
			var gstAmt = parseFloat( $('#gstAmtBox').text() );
			

			var total = taxableVal + gstAmt;
			
			var roundOff = parseFloat( $('#rounfOffBox').text() );
			var net = parseFloat( $('#netBox').text() );

			var oneComment = $('#oneComment').val();
			var payment_type = $('input[name=payment_type]:checked').val();

			var myJSON = JSON.stringify(postData);
			var url='".$this->Url->build(['controller'=>'Bills','action'=>'addKotBill'])."';
			url=url+'?myJSON='+myJSON+'&total='+total+'&roundOff='+roundOff+'&net='+net+'&c_name='+c_name+'&c_mobile_no='+c_mobile_no+'&c_address='+c_address+'&order_type='+order_type+'&employee_id='+employee_id+'&offer_id='+offer_id+'&oneComment='+oneComment+'&payment_type='+payment_type+'&c_address='+c_address;
			url=encodeURI(url);
			
			$.ajax({
				url: url,
				dataType: 'json'
			}).done(function(response) {

				var url='".$this->Url->build(['controller'=>'Kots','action'=>'viewkot'])."';
				url=url+'/'+response.kot_id;
				var win = window.open(url, '_blank', 'shilpijain', 'modal=no');

				//var mywindow = window.open(url, 'title', 'height=500,width=500');   
    			//mywindow.onload = function() { mywindow.print(); mywindow.close(); }


				var url='".$this->Url->build(['controller'=>'Bills','action'=>'view'])."';
				url=url+'?bill-id='+response.bill_id;
				var win = window.open(url, '_blank', 'shilpijain', 'modal=no');

				//var mywindow2 = window.open(url, 'title2', 'height=500,width=500');   
    			//mywindow2.onload = function() { mywindow2.print(); mywindow2.close(); }

				location.reload();
			});
		});
		
		$('.disBox').die().live('keyup',function(event){
			var qty           = parseFloat($(this).closest('tr').find('td:nth-child(3)').text());
		    if(isNaN(qty)){ qty=0; }
			var rate          = parseFloat($(this).closest('tr').find('td:nth-child(4)').text());
			if(isNaN(rate)){ rate=0; }
			var discount_per  = parseFloat($(this).closest('tr').find('td:nth-child(6) input').val());
			if(isNaN(discount_per)){ discount_per=0; }
			var amount   = qty*rate;						
			if(discount_per)
			{   
				var disAmt    = (amount*discount_per)/100;
				disAmt  = round(disAmt,2);
			}
			$(this).closest('tr').find('td:nth-child(7) input').val(disAmt);
			calculateBill();
		});
		
		$(document).on('keyup','.disBoxamt',function(e){
			var qty           = parseFloat($(this).closest('tr').find('td:nth-child(3)').text());
		    if(isNaN(qty)){ qty=0; }

			var rate          = parseFloat($(this).closest('tr').find('td:nth-child(4)').text());
			if(isNaN(rate)){ rate=0; }

			var discount_amt  = parseFloat($(this).closest('tr').find('td:nth-child(7) input').val());
			if(isNaN(discount_amt)){ discount_amt=0; }
			
			var amount   = qty*rate;

			if(discount_amt && amount>0)
			{   
				var dis_per   = (discount_amt*100)/amount;
				dis_per = round(dis_per,2);
				
			}
			$(this).closest('tr').find('td:nth-child(6) input').val(dis_per);
			calculateBill();
		});
		
		$('#overalldis').die().live('keyup',function(event){
			var dic = $(this).val();
			$('.disPer').val(dic);
			$('#kotBox tbody tr.mainKotTr').each(function(){
				var per = parseFloat($(this).closest('tr').find('td:nth-child(6) input').val());
				var amount = parseFloat($(this).closest('tr').find('td:nth-child(5)').text());

				var disAmt= round(amount*per/100, 2);
				if(disAmt){
					$(this).closest('tr').find('td:nth-child(7) input').val(disAmt);
				}else{
					$(this).closest('tr').find('td:nth-child(7) input').val('');
				}
			});
			calculateBill();
		});
		
		


		$('.closeCommentBoxKOT').die().live('click',function(event){
			$('#WaitBox9').hide();
		});

		$('.closeCommentBox').die().live('click',function(event){
			$('#WaitBox5').hide();
		});


		$('.commentStringKOT').die().live('click',function(event){
			var s=$(this).text();
			old_s=$('.commentContainorKOT').val();
			if(old_s!=''){
				s=old_s+', '+s;
			}
			
			$('.commentContainorKOT').val(s);
		});

		$('.commentString').die().live('click',function(event){
			var s=$(this).text();
			old_s=$('.commentContainor').val();
			if(old_s!=''){
				s=old_s+', '+s;
			}
			
			$('.commentContainor').val(s);
		});

		$('.saveComment').die().live('click',function(event){
			var c=$('.commentContainor').val();
			var sr_no=$('#rowSR').val();
			if(sr_no=='0'){
				if(c){
					$('#overallComnt').html('<span class=comnt style=\"font-size: 12px;color: #a5a5a5;\">['+c+']</span>');
				}else{
					$('#overallComnt').html('<span class=comnt style=\"font-size: 12px;color: #a5a5a5;\"></span>');
				}
				
				$('#oneComment').val(c);
				$('#WaitBox5').hide();
			}else{
				$('tr[row_no='+sr_no+']').find('.comment').val(c);
				$('tr[row_no='+sr_no+']').find('td:nth-child(2) span.comnt').remove();
				if(c){
					$('tr[row_no='+sr_no+']').find('td:nth-child(2)').append('<span class=comnt style=\"font-size: 11px;color: #a5a5a5;\"><br/>['+c+']</span>');
				}else{
					$('tr[row_no='+sr_no+']').find('td:nth-child(2)').append('<span class=comnt style=\"font-size: 11px;color: #a5a5a5;\"><br/></span>');
				}
				$('#WaitBox5').hide();
			}
			
		});

		$('.saveCommentKOT ').die().live('click',function(event){
			var c=$('.commentContainorKOT').val();
			var kot_id=$('#kot_id').val();
		
			$('.oneCommentOld_'+kot_id).html(c);
			if(c){
				$('span.comntOld_'+kot_id).text('['+c+']');
			}else{
				$('span.comntOld_'+kot_id).text('');
			}
			
			$('#WaitBox9').hide();
		});


		$('.disPer').die().live('keyup',function(event){
			var per = parseFloat($(this).val());
			var amount = parseFloat($(this).closest('tr').find('td:nth-child(5)').text());

			var disAmt= round(amount*per/100, 2);
			if(disAmt){
				$(this).closest('tr').find('td:nth-child(7) input').val(disAmt);
			}else{
				$(this).closest('tr').find('td:nth-child(7) input').val('');
			}
			
			calculateBill();
		});

		$('.disAmt').die().live('keyup',function(event){
			var disAmt = parseFloat($(this).val());
			var amount = parseFloat($(this).closest('tr').find('td:nth-child(5)').text());

			var disPer = (disAmt*100)/amount;
			var disPer = round(disPer, 2);
			if(disPer){
				$(this).closest('tr').find('td:nth-child(6) input').val(disPer);
			}else{
				$(this).closest('tr').find('td:nth-child(6) input').val('');
			}
			
			calculateBill();
		});

		$('.KOTComment').die().live('click',function(event){
			var c=$('#oneComment').val();
			$('.commentContainor').val(c);
			var sr_no=0;
			$('#rowSR').val(sr_no);
			$('#WaitBox5').show();
		});

		
		$('#removeoffer').die().live('click',function(event){
			event.preventDefault();
			$('#offerShow').html('');
			
			$('#overalldis').removeAttr('readonly', 'readonly');
			$('.disPer').removeAttr('readonly', 'readonly');
			$('.disAmt').removeAttr('readonly', 'readonly');

			var dic = '';
			$('.disPer').val(dic);
			$('#overalldis').val(dic);
			$('#kotBox tbody tr.mainKotTr').each(function(){
				var per = parseFloat($(this).closest('tr').find('td:nth-child(6) input').val());
				var amount = parseFloat($(this).closest('tr').find('td:nth-child(5)').text());

				var disAmt= round(amount*per/100, 2);
				if(disAmt){
					$(this).closest('tr').find('td:nth-child(7) input').val(disAmt);
				}else{
					$(this).closest('tr').find('td:nth-child(7) input').val('');
				}
			});
			calculateBill();
		});

		$('.apply').die().live('click',function(event){
			var offer_code=$('input[name=offer_code]').val();
			if(!offer_code){
				alert('Enter a offer code');
				return;
			}
			$(this).text('Appling');
			var th=$(this);

			var url='".$this->Url->build(['controller'=>'OfferCodes','action'=>'checkOffer'])."';
			url=url+'?offer_code='+offer_code;
			 
			$.ajax({
				url: url,
				dataType: 'json',
			}).done(function(response) {
				if(response.valid=='yes'){
					$('#overalldis').attr('readonly', 'readonly');
					$('.disPer').attr('readonly', 'readonly');
					$('.disAmt').attr('readonly', 'readonly');

					var dic = response.per;
					$('.disPer').val(dic);
					$('#overalldis').val(dic);
					$('#kotBox tbody tr.mainKotTr').each(function(){
						var per = parseFloat($(this).closest('tr').find('td:nth-child(6) input').val());
						var amount = parseFloat($(this).closest('tr').find('td:nth-child(5)').text());

						var disAmt= round(amount*per/100, 2);
						if(disAmt){
							$(this).closest('tr').find('td:nth-child(7) input').val(disAmt);
						}else{
							$(this).closest('tr').find('td:nth-child(7) input').val('');
						}
					});
					calculateBill();

					$('#offerShow').html('Offer code applied: '+offer_code+'@'+response.per+'% <span class=offer_id style=\"display:none;\">'+response.offer_id+'</span> <a href=# id=removeoffer >Remove</a> ');

				}else{
					alert('The offer code is not valid.');
				}
				th.text('APPLY');
				$('input[name=offer_code]').val('');
			});


		});


		$('#closeWaitBox6').die().live('click',function(event){
			$('#WaitBox6').hide();
		});

		$('#AddCustomer').die().live('click',function(event){
			$('#WaitBox6').show();
		});


		$('#closeWaitBox7').die().live('click',function(event){
			$('#WaitBox7').hide();
		});

		$('#UpdateCustomer').die().live('click',function(event){
			 	var customer_name = $('#c_name').val();
		        var customer_mobile = $('#c_mobile_no').val();
		        var customer_email = $('#c_email').val();
		        var customer_dob = $('#dob').val();
		        var customer_anniversary = $('#doa').val();
		        var customer_address = $('#c_address').val();

		        var url='".$this->Url->build(['controller'=>'Customers','action'=>'saveCommentInfo'])."';
		        url=url+'?customer_name='+customer_name+'&customer_mobile='+customer_mobile+'&customer_email='+customer_email+'&customer_dob='+customer_dob+'&customer_anniversary='+customer_anniversary+'&customer_address='+customer_address;
		        url=encodeURI(url);
		        $.ajax({
		            url: url,
		        }).done(function(response) {

		            $('#WaitBox7').hide();

		            var customer_id = $('#EditCustomer').attr('customer_id');
		            var url='".$this->Url->build(['controller'=>'Customers','action'=>'customerSection'])."';
					url=url+'?customer_id='+customer_id;
					$.ajax({
						url: url,
					}).done(function(htm) {
						$('#customerSection').html(htm);
					})

		        });
		});

		$('#EditCustomer').die().live('click',function(event){
			$('#WaitBox7').show();
			var customer_id = $(this).attr('customer_id');
			var url='".$this->Url->build(['controller'=>'Customers','action'=>'fetchCustomerInfo'])."';
			url=url+'?customer_id='+customer_id;
			$.ajax({
				url: url,
			}).done(function(response) {
				$('#WaitBox7 div.modal-body').html(response);
				$('.date-picker').datepicker();
			});
		});
		
		$('#FetchCusInfo').die().live('click',function(event){
			var customer_name = $('#customer-name').val();
			var customer_mobile = $('#customer-mobile').val();
			var url='".$this->Url->build(['controller'=>'Customers','action'=>'saveNewCustomer'])."';
			url=url+'?customer_name='+customer_name+'&customer_mobile='+customer_mobile;
			$.ajax({
				url: url,
			}).done(function(response) {

				var url='".$this->Url->build(['controller'=>'Customers','action'=>'customerSection'])."';
				url=url+'?customer_id='+response;
				$.ajax({
					url: url,
				}).done(function(htm) {
					$('#customerSection').html(htm);
				})

			});
		});

		$('#closeWaitBox7').die().live('click',function(event){
			$('#WaitBox7').hide();
		});

		$('.Taxbutn').die().live('click',function(event){
			var totalGst=0; var totalDisAmt=0;
			$('#kotBox tbody tr.mainKotTr').each(function(){
				var item_name = $(this).find('td:nth-child(2)').text();
				var qty = $(this).find('td:nth-child(3) span.qty').text();
				var rate = $(this).find('td:nth-child(4)').text();
				var amount = $(this).find('td:nth-child(5)').text();
				var DisAmount = parseFloat( $(this).find('td:nth-child(7) input').val() );
				var gst_per = parseFloat( $(this).attr('gst_per') );

				var tr = '<tr>';
				tr = tr+'<td>'+item_name+'</td>';
				tr = tr+'<td>'+qty+'</td>';
				tr = tr+'<td>'+rate+'</td>';
				tr = tr+'<td>'+amount+'</td>';
				tr = tr+'<td>'+DisAmount+'</td>';
				tr = tr+'<td>'+gst_per+'%</td>';

				var gstAmt = parseFloat( round( (amount-DisAmount)*gst_per/100, 2) );
				var net = round( (amount-DisAmount)*(100+gst_per)/100, 2);
				tr = tr+'<td>'+gstAmt+'</td>';
				totalDisAmt=totalDisAmt+DisAmount;
				totalGst=totalGst+gstAmt;
				tr = tr+'<td>'+net+'</td>';

				tr = tr+'</tr>';
				$('table#taxDetails tbody').append(tr);
			});
			$('table#taxDetails tfoot tr:nth-child(1) td:nth-child(2)').html(round(totalDisAmt));
			$('table#taxDetails tfoot tr:nth-child(2) td:nth-child(2)').html(round(totalGst/2, 2));
			$('table#taxDetails tfoot tr:nth-child(3) td:nth-child(2)').html(round(totalGst/2, 2));


			$('#popup10').show();
		});


		shortcut.add('F2', function() {
		    $('.CreateBill').trigger('click');
		});


		$('.closepopup10').die().live('click',function(event){
			$('table#taxDetails tbody').html('');
			$('#popup10').hide();
		});


		ComponentsPickers.init();


	});

	
	function UpdateCustmber(){
		var table_id=$('#tableInput').val();
		var url='".$this->Url->build(['controller'=>'Kots','action'=>'customer'])."';
		url=url+'?table_id='+table_id;
		 
		$.ajax({
			url: url,
		}).done(function(response) { 
			$('#customer_info').html(response);
		});
	}

	function amountcals(){
		$('#kotBox tbody tr.mainKotTr').each(function(){
			var quantity=parseInt($(this).find('td span.qty').html());
			var rate=parseInt($(this).find('td:nth-child(4)').text());
			var tot_amount=quantity*rate;
			$(this).find('td:nth-child(5)').text(tot_amount);

			var per = parseFloat($(this).find('td:nth-child(6) input').val());
			var amount = parseFloat($(this).find('td:nth-child(5)').text());

			if(per){
				var disAmt = round(amount*per/100, 2);
			}else{
				var disAmt = 0;
			}

			if(disAmt==0){
				disAmt = '';
			}
			
			$(this).find('td:nth-child(7) input').val(disAmt);

		});
		calculateBill();
	}

	function calculateBill(){
			var total=0; var total_taxable_value=0; var total_gst=0;
			$('#kotBox tbody tr.mainKotTr').each(function(){
				var quantity=parseFloat($(this).find('td:nth-child(3) span.qty').text());
				var rate=parseFloat($(this).find('td:nth-child(4)').text());
				var amount=quantity*rate;
				var discount_amount=parseFloat($(this).find('td:nth-child(7) input').val());

				if(discount_amount){ 
				 	taxable_value=round(amount-discount_amount,2);
 				}else{
 					taxable_value=amount;
 					discount_amount=0;
 				}

 				total_taxable_value=total_taxable_value+taxable_value;

				var percen=parseFloat($(this).attr('gst_per'));
				var taxamount=round((taxable_value*percen)/100,2);
				total_gst=total_gst+taxamount;
			});
			total_taxable_value = round(total_taxable_value, 2);
			$('#taxableValBox').html(total_taxable_value);
			total_gst = round(total_gst, 2);
			$('#gstAmtBox').html(total_gst);

			var net=total_taxable_value+total_gst;
			var netAfterRound = round(net);
			var roundOff = round(netAfterRound-net, 2);

			$('#rounfOffBox').html(roundOff);
			$('#netBox').html(netAfterRound);


		}	
	";



$js.="
	$(document).keydown(function(e) {
	    switch(e.which) {
	        case 37: // left
	       	var focused = $(':focus');
			var row_no=focused.attr('row_no');
			var column_no=focused.attr('column_no');
			column_no--;
			$('input[row_no='+row_no+'][column_no='+column_no+']').focus();
			break;

			case 39: // right
	       	var focused = $(':focus');
			var row_no=focused.attr('row_no');
			var column_no=focused.attr('column_no');
			column_no++;
			$('input[row_no='+row_no+'][column_no='+column_no+']').focus();
			break;

			case 40: // down
			var focused = $(':focus');
			var row_no=focused.attr('row_no');
			var column_no=focused.attr('column_no');
			row_no++;
			$('input[row_no='+row_no+'][column_no='+column_no+']').focus();
			break;

			case 38: // up
			var focused = $(':focus');
			var row_no=focused.attr('row_no');
			var column_no=focused.attr('column_no');
			row_no--;
			$('input[row_no='+row_no+'][column_no='+column_no+']').focus();
			break;
	       

	        default: return; // exit this handler for other keys
	    }
	    e.preventDefault(); // prevent the default action (scroll / move caret)

	    
	});
";

$js.="
	$(function(){
	  $( '.KOTView' ).on( 'swipeleft', swipeleftHandler );
	  $( '.KOTView' ).on( 'swiperight', swiperightHandler );
	 
	  function swipeleftHandler( event ){
	  		var currentPage=$('#slideRight').attr('currentPage');
			currentPage++;
			$('.ItemBox').hide();
			if( $('#favStatus').val() ==1 ){
				if($('.ItemBox[fav_display_no='+currentPage+']').length==0){
					var currentPage=currentPage-1;
				}
				$('.ItemBox[is_favorite=1][fav_display_no='+currentPage+']').show();
			}else{
				var sub_category_id=$('#SubCategoryArea .activeSub').attr('sub_category_id');
				if($('.ItemBox[sub_category_id='+sub_category_id+'][display_no='+currentPage+']').length==0){
					var currentPage=currentPage-1;
				}
				$('.ItemBox[sub_category_id='+sub_category_id+'][display_no='+currentPage+']').show();
			}

			$('#slideLeft').attr('currentPage',currentPage);
			$('#slideRight').attr('currentPage',currentPage);	
	  }

	  function swiperightHandler( event ){
	    	var currentPage=$('#slideLeft').attr('currentPage');
			currentPage--;
			$('.ItemBox').hide();
			if( $('#favStatus').val() ==1 ){
				if($('.ItemBox[fav_display_no='+currentPage+']').length==0){
					var currentPage=1;
				}
				$('.ItemBox[is_favorite=1][fav_display_no='+currentPage+']').show();
			}else{
				var sub_category_id=$('#SubCategoryArea .activeSub').attr('sub_category_id');
				if($('.ItemBox[sub_category_id='+sub_category_id+'][display_no='+currentPage+']').length==0){
					var currentPage=1;
				}
				$('.ItemBox[sub_category_id='+sub_category_id+'][display_no='+currentPage+']').show();
			}

			$('#slideLeft').attr('currentPage',currentPage);
			$('#slideRight').attr('currentPage',currentPage);	
	  }

	});
";



echo $this->Html->scriptBlock($js, array('block' => 'scriptBottom'));
?>




<div data-role="page" id="pageone" style="display: ;">
  

	<div data-role="main" class="ui-content">
		
	</div>

	
</div> 

<div id="WaitBox" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="false" style="display: none; padding-right: 12px;">
	<div class="modal-backdrop fade in" ></div>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
			</div>
		</div>
	</div>
</div>

<div id="WaitBox2" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="false" style="display: none; padding-right: 12px;">
	<div class="modal-backdrop fade in" ></div>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
			</div>
		</div>
	</div>
</div>

<div id="WaitBox3" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="false" style="display: none; padding-right: 12px;">
	<div class="modal-backdrop " ></div>
	<div class="modal-dialog modal-full">
		<div class="modal-content">
			<div class="modal-body">
			</div>
		</div>
	</div>
</div>

<div id="WaitBox4" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="false" style="display: none; padding-right: 12px;">
	<div class="modal-backdrop fade in" ></div>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
			</div>
		</div>
	</div>
</div>

<div id="WaitBox5" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="false" style="display: none; padding-right: 12px;">
	<div class="modal-backdrop fade in" ></div>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<input type="hidden" id="rowSR">
				<div style=" text-align: center; padding: 0px 0 15px 0px; font-size: 15px; font-weight: bold; color: #2D4161; ">COMMENT BOX</div>
				<br/>
				<div class="form-group">
					<textarea class="form-control commentContainor" rows="3" style="background-color: #F5F5F5;"></textarea>
				</div>
				<br/>
				<div>
					<label style=" color: #2D4161; font-weight: bold; font-size: 14px; ">Predefined Comments</label>
					<div>
						<?php foreach ($Comments as $Comment) { ?>
							<span class="commentString"><?php echo $Comment; ?></span>
						<?php } ?>
					</div>
				</div>
				<br/><br/>
				<div align="center">
					<span class="closeCommentBox">CLOSE</span>
					<span class="saveComment">SAVE COMMENT</span>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- <div id="WaitBox6" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="false" style="display: none; padding-right: 12px;">
	<div class="modal-backdrop fade in" ></div>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<form method="post" id="customerForm">
					<input type="hidden" name="table_id" value="<?php echo $table_id; ?> ">
					<div align="center"><span style=" color: #2D4161; font-weight: bold; font-size: 14px; ">CUSTOMER INFORMATION</span></div>
					<div>
						<div style="padding: 5px 25px; ">
							<br>
							<table width="100%">
								<tr>
									<td style="padding-right: 5px;">
										<div class="input-icon">
											<i class="fa fa-user"></i>
											<input type="text" class="form-control" placeholder="Name" style="background-color: #f5f5f5 !important" name="c_name" id="c_name" value="" required="required">
										</div><br>
									</td>
									<td style="padding-right: 5px;">
										<div class="input-icon">
											<i class="fa fa-mobile" style="font-size: 20px;"></i>
											<input type="text" class="form-control" placeholder="Mobile" style="background-color: #f5f5f5 !important" name="c_mobile_no" id="c_mobile_no" value="" maxlength="10" minlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" required="required" minlength="10">
										</div><br>
									</td>
								</tr>
								<tr>
									<td style="padding-right: 5px;">
										<div class="input-icon">
											Date of Birth<i class="fa fa-child"></i>
											<input type="date" class="form-control" placeholder="Date of Birth" style="background-color: #f5f5f5 !important" name="dob" id="dob" value="">
										</div>
									</td>
									<td style="padding-left: 5px;">
										<div class="input-icon">
											Date of Anniversary<i class="fa fa-empire"></i>
											<input type="date" class="form-control" placeholder="Date of Anniversary" style="background-color: #f5f5f5 !important" name="doa" id="doa" value="">
										</div>
									</td>
								</tr>
							</table>
							<br>
							<div class="input-icon">
								<i class="fa fa-envelope-square" style="font-size: 20px;"></i>
								<input type="text" class="form-control" placeholder="Email" style="background-color: #f5f5f5 !important" name="c_email" id="c_email" value="">
							</div>
							<br>
							<textarea rows="4" cols="50" placeholder="Address..." name="c_address" id="c_address" style="line-height: 20px; background: whitesmoke;resize: none;" class="form-control"></textarea>
						</div>
						<br/>
						<div align="center">
							<button type="button" class="btn " id="closeWaitBox6">CLOSE</button>
							<button type="button" class="btn btn-danger" id="SaveNewCustomer">SAVE</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div> -->


<div id="WaitBox7" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="false" style="display: none; padding-right: 12px;">
	<div class="modal-backdrop fade in" ></div>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div align="center">Loading...</div>
			</div>
		</div>
	</div>
</div>

<input type="hidden" id="favStatus" value="0">

<div id="WaitBox8" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="false" style="display: none; padding-right: 12px;">
	<div class="modal-backdrop fade in" ></div>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<input type="hidden" id="rowSRold">
				<div style=" text-align: center; padding: 0px 0 15px 0px; font-size: 15px; font-weight: bold; color: #2D4161; ">COMMENT BOX</div>
				<br/>
				<div class="form-group">
					<textarea class="form-control commentContainorOld" rows="3" style="background-color: #F5F5F5;"></textarea>
				</div>
				<br/>
				<div>
					<label style=" color: #2D4161; font-weight: bold; font-size: 14px; ">Predefined Comments</label>
					<div>
						<?php foreach ($Comments as $Comment) { ?>
							<span class="commentStringOld"><?php echo $Comment; ?></span>
						<?php } ?>
					</div>
				</div>
				<br/><br/>
				<div align="center">
					<a href="javascript:void(0)" class="closeCommentBoxOld btn default">CLOSE</a>
					<a href="javascript:void(0)" class="saveCommentOld btn btn-danger">SAVE COMMENT</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="WaitBox9" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="false" style="display: none; padding-right: 12px;">
	<div class="modal-backdrop fade in" ></div>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<input type="hidden" id="kot_id">
				<div style=" text-align: center; padding: 0px 0 15px 0px; font-size: 15px; font-weight: bold; color: #2D4161; ">COMMENT BOX</div>
				<br/>
				<div class="form-group">
					<textarea class="form-control commentContainorKOT" rows="3" style="background-color: #F5F5F5;"></textarea>
				</div>
				<br/>
				<div>
					<label style=" color: #2D4161; font-weight: bold; font-size: 14px; ">Predefined Comments</label>
					<div>
						<?php foreach ($Comments as $Comment) { ?>
							<span class="commentStringKOT"><?php echo $Comment; ?></span>
						<?php } ?>
					</div>
				</div>
				<br/><br/>
				<div align="center">
					<a href="javascript:void(0)" class="closeCommentBoxKOT btn default">CLOSE</a>
					<a href="javascript:void(0)" class="saveCommentKOT btn btn-danger">SAVE COMMENT</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="popup10" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="false" style="display: none; padding-right: 12px;">
	<div class="modal-backdrop fade in" ></div>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<table id="taxDetails" class="table table-bordered">
					<thead>
						<th>Item</th>
						<th>Qty</th>
						<th>Rate</th>
						<th>Amount</th>
						<th>Dis Amt</th>
						<th>GST %</th>
						<th>GST Rs</th>
						<th>Net</th>
					</thead>
					<tbody>
						
					</tbody>
					<tfoot>
						<tr>
							<td style="text-align: right;" colspan="6"><b>Total Discount</b></td>
							<td style="text-align: right;"></td>
						</tr>
						<tr>
							<td style="text-align: right;" colspan="6"><b>Total CGST</b></td>
							<td style="text-align: right;"></td>
						</tr>
						<tr>
							<td style="text-align: right;" colspan="6"><b>Total SGST</b></td>
							<td style="text-align: right;"></td>
						</tr>
					</tfoot>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn default closepopup10">Close</button>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	.ui-loader{
		display: none;
	}
	#pageone{
		display: none;
	}
</style>