<div class="container-fluid">

    <!-- Title -->
    <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h5 class="txt-dark">Edit Product</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('admin/Dashboard')?>">Dashboard</a></li>
                <li class="active"><span><?php echo $page?></span></li>
                <!-- <li class="active"><span>data-table</span></li> -->
            </ol>

        </div>
        <!-- /Breadcrumb -->
    </div>

    <hr class="light-grey-hr" />


    <div class="col-sm-12">
        <div class="panel panel-default card-view">

            <div class="panel-heading">
                <ul role="tablist" class="nav nav-pills" id="myTabs_6">
                    <li class="active" role="presentation"><a aria-expanded="true" data-toggle="tab" role="tab"
                            id="home_tab_6" href="#home">Product Details</a></li>
                    <li role="presentation" class=""><a data-toggle="tab" id="profile_tab_6" role="tab" href="#images"
							aria-expanded="true">Images</a></li>
                    <li role="presentation" class=""><a data-toggle="tab" id="profile_tab_6" role="tab"
                            href="#attributes" aria-expanded="true">Product Attributes</a></li>
                    <li role="presentation" class=""><a data-toggle="tab" id="profile_tab_6" role="tab" href="#tagstab"
                            aria-expanded="true">Tags & Category</a></li>
                </ul>

            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">

                    <div class="pills-struct mt-40">
                        <form action="<?php echo base_url('admin/Product/update/').$product_data[0]['id']?>" method="POST"
                            enctype="multipart/form-data">
                            <div class="tab-content" id="myTabContent_6">
                                <div id="home" class="tab-pane fade active in" role="tabpanel">
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label " for="example-input-small"> Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="product" class="form-control input-sm"
                                                value="<?php echo $product_data[0]['name']?>">

                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label " for="example-input-small">
                                            Description</label>
                                        <div class="col-sm-9">

                                            <textarea type="text" name="desc"
                                                class="form-control summernote"><?php echo $product_data[0]['description']?></textarea>

                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label " for="example-input-small"> Price</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="price" class="form-control input-sm"
                                             value="<?php echo $product_data[0]['price']?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label " for="example-input-small">
                                            Quantity</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="quantity" class="form-control input-sm"
                                                value="<?php echo $product_data[0]['quantity']?>">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label " for="example-input-small">
                                            Discount</label>
                                        <div class="col-sm-9">

                                            <input type="text" name="discount" class="form-control input-sm"
                                                value="<?php echo $product_data[0]['discount']?>">

                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label " for="example-input-small"> Product
                                            image</label>
                                        <div class="col-sm-10">
                                            <div class="mt-40"><table class="table"><tr>
                                                <td><img src="<?php echo base_url('/uploads/product/').$product_data[0]['profile_pic'] ?>"
                                                    alt="" style="width:150px "></td>
                                                    <td class="center"><a  class="text-center tip btn btn-primary" >	<input type="file" class="dropify form-control" name='profile' /></i></a></td>
                                                    </tr></table>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div id="attributes" class="tab-pane fade" role="tabpanel">
                                    <div class="container">
                                     <table class='table'>
                                     <thead><tr><th>Attribute</th><th>Name</th><th>value</th><th>Option</th></tr></thead>
                                        <?php if(count($attribute)>0){
                                            foreach($attribute as $row){?>

                                        <tr>
                                            <td >Attribute</td>
                                            <td >  <?php echo $row['name']?>
                                            </td>
                                            <td >

                                                    <?php echo $row['value']?>
                                            </td>
                                            <td>

														 <a title="Trash" class="pd-setting-ed btn btn-danger" onclick="delete_attr(<?php echo $row['id'] ;?>)"><i class="fa fa-trash-o fa-3x" aria-hidden="true"></i></a>
													 </td>
                                        </tr>


                                        <?php  }echo "</table>";
                                    }else{
                                         echo "<div class='text-center'><h6 >No attributes added. Add now</h6></div><br>";
                                    } ?>

                                    </div><hr>
                                    <div class="container">
										<div class="form-group row">
											<label class="col-sm-2 control-label "
												for="example-input-small">Attribute</label>
											<div class="col-sm-4">
												<select name="attribute[]" class="form-control">
													<option value="none">Select attribute</option>
													<?php foreach($attribute_data as $row){ ?>
													<option value="<?php echo $row['id'] ?>"> <?php echo $row['name'] ?>
													</option>
													<?php } ?>
												</select>

											</div>
											<div class="col-sm-4">
												<input type="text" name="value[]" class="form-control input-sm"
													placeholder="value">
											</div>
											<div class="col-sm-2">
												<button type="button" name="add_more" id="add"
													class="btn btn-success">+</button>
											</div>
										</div>
										<div class="form-group row" id="add_data">

										</div>
									</div>
                                </div>
                                <div id="tagstab" class="tab-pane fade" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group ">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Tag</th>
                                                            <th>Value</th>
                                                            <th>Option</th>
                                                        </tr>
                                                    </thead>
                                                    <?php foreach($tag as $row){?>
                                                    <tr>
                                                        <td>
                                                            Tag</td>
                                                        <td>

                                                        <?php echo $row['title']?>


                                                        </td><td>

														 <a title="Trash" class="pd-setting-ed btn btn-danger" onclick="delete_tag('<?php echo  $row['id'];?>')"><i class="fa fa-trash-o fa-3x" aria-hidden="true"></i></a>
													 </td>
                                                        <?php }?></table>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group ">

                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Category</th>
                                                            <th>Value</th>
                                                            <th>Option</th>
                                                        </tr>
                                                    </thead>
                                                    <?php foreach($category as $row){?>
                                                    <tr>
                                                        <td>
                                                            Category</td>
                                                        <td>

                                                           <?php echo $row['name']?>

                                                        </td><td>

														 <a title="Trash" class="pd-setting-ed btn btn-danger" onclick="delete_tag('<?php echo  $row['id'] ;?>')"><i class="fa fa-trash-o fa-3x" aria-hidden="true"></i></a>
													 </td>
                                                    </tr>
                                                    <?php }?>
                                                </table>
                                            </div>
                                        </div>
                                    </div><hr>
                                    <div class="row">
										<div class="col-sm-6">
											<div class="form-group ">
												<label class="login2">Course Tag</label>
												<select class="select2 form-control" name='tag[]'
													data-placeholder="Choose a Tags..." multiple="multiple">
													<?php foreach($tag_data as $row){ ?>
													<option value="<?php echo $row['id'] ?>">
														<?php echo $row['title'] ?>
													</option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group ">

												<label class="login2">Course Category</label>
												<select class="select2 form-control" name='category[]'
													data-placeholder="Choose a Category..." multiple="multiple">
													<?php foreach($category_data as $row){ ?>
													<option value="<?php echo $row['id'] ?>"> <?php echo $row['name'] ?>
													</option>
													<?php } ?>
												</select>
											</div>
										</div>
									</div>
                                    <div class="form-group row ">
                                        <div class="col-sm-12 text-center">
                                            <input type="hidden"
                                                name="<?php echo $this->security->get_csrf_token_name();?>"
                                                value="<?php echo $this->security->get_csrf_hash();?>">
                                            <input type="submit" value="Submit" class="btn btn-primary pull-right">

                                        </div>

                                    </div>
                                </div>
                                <div id="images" class="tab-pane fade" role="tabpanel">
									<div class="form-group row">
										<table class="table" >
											<tr>
												<th>Name</th>
												<th>Image</th>
												<th>Option</th>
											</tr>
                                            <?php if(count($pics)>0){

                                                 foreach($pics as $row){?>
											    <tr>
												<td><?php echo $row['image'] ?></td>

												<td>
                              <img src="<?php echo base_url('/uploads/product/').$row['image'] ?>" style="width:150px " alt="<?php echo $row['image'] ?>" >
												</td>
                                                <td>

														 <a title="Trash" class="pd-setting-ed btn btn-danger" onclick="delete_image(<?php echo $pro_id ;?>)"><i class="fa fa-trash-o fa-3x" aria-hidden="true"></i></a>
													 </td>
											</tr>


                                            <?php   }
                                        } else{
                                             echo "<div class='text-center'><h6 >No images added. Add now</h6></div><br>";
                                            } ?>
										</table>
									</div>
                                    <div class="form-group row">
										<table class="table" id="tr_images">
											<tr>
												<th>Image</th>
												<th>Upload</th>
												<th>option</th>
											</tr>

											<tr>
												<td colspan='2' class='text-center'>Click to add images
												</td>
												<td>

													<button type="button" name="add_image" id="add_image"
														class="btn btn-success">+</button>
												</td>
											</tr>

										</table>
									</div>
								</div>
                            </div>



                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /Main Content -->
<script>
    function delete_tag(id) {
          $(this).parent().remove();
        $.ajax({
	      type: "POST",
	      url: "<?php echo base_url()?>admin/Product/Delete_tag/",
	      data:{'id': id },
	      success: function(result) {
           location.reload(true);
	        alert("Data deleted successfully");
	      }
	    });
    }
    function delete_attr(id) {
          $(this).parent().remove();
        $.ajax({
	      type: "POST",
	      url: "<?php echo base_url()?>admin/Product/Delete_attr/",
	      data:{'id': id },
	      success: function(result) {
           location.reload(true);
	        alert("Data deleted successfully");
	      }
	    });
    }
</script>
<?php include('product_js.php');?>
