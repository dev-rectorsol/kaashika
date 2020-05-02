<script src="<?php echo base_url(); ?>/vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#add').on('click', function() {
      var element = '	<div class="row">'; element += '<br>';
      element += '<div class="col-sm-2 " ></div><div class="col-sm-4">';
			element +=										'<select name="attribute[]" id="example-input-small" class="form-control">';
			element +=										'<option value="none">Select attribute</option>';
			element +=										'<?php foreach($attribute as $row){ ?>';
			element +=										'<option value="<?php echo $row['id'] ?>"> <?php echo $row['name'] ?> </option>';
			element +=										'<?php } ?>';
			element +=                 						 '</select>';
			element +=									'</div>';
			element +=									'<div class="col-sm-4">';
			element +=										'<input type="text" id="example-input-small" name="value[]" class="form-control input-sm" placeholder="value">';
			element +=									'</div>';
      element += '<div class="col-sm-2"> <button type="button" name="remove"  class="btn btn-danger btn-xs remove">-</button></div>';
      element += '</div>';
      element += '</div>';

      $('#add_data').append(element);
  });
$('#add_image').on('click', function() {
element ="<tr ><td>";
element +="product image</td>	<td>";
element +="<input type='file' class='dropify form-control' name='pics[]' /></td><td>";
element +="	<button type='button'   class='btn btn-danger remove_image'>-</button>	</td>	</tr>";


$('#tr_images tbody').append(element);
$('.dropify').dropify();
});


    $(document).on('click', '.remove_image', function() {
      $(this).parent().parent().remove();
    });
 $(document).on('click', '.remove', function() {
      $(this).parent().parent().remove();
    });

    // $(".get_data").click(function(){
    //         // alert ('ok');
    //         var id =  $(this).attr('id');
    //          //alert(id);
    //
    //               var csrf_name = $("#get_csrf_hash").attr('name');
    //               var csrf_val = $("#get_csrf_hash").val();
    //               $.ajax({
    //                 type: "POST",
    //                 url: "<?php echo base_url('admin/Product/product_details') ?>",
    //                 data: {'id' : 	id, '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php  echo $this->security->get_csrf_hash(); ?>'},
    //                 datatype: 'json',
    //                 success: function(data){
    //
    //                    $(".body").html(data);
    //                 }
    //               });
    //             });

              });



</script>
