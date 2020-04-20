  <script src="<?php echo base_url(); ?>/vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#add').on('click', function() {
      var element = '	<div class="row">'

      element += '<div class="col-sm-2"></div>	<div class="col-sm-4"> <input type="text" class="form-control" name="attribute[]" value="" placeholder="attribute" required></div><div class="col-sm-4"> <input type="text" class="form-control" name="value[]" value="" placeholder="Value" required></div>'
      element += '<div class="col-sm-2"> <button type="button" name="remove"  class="btn btn-danger btn-xs remove">-</button></div>'

      element += '</div>';
      element += '</br>'
      $('#add_data').append(element);
  });

    $(document).on('click', '.remove', function() {
      $(this).parent().parent().remove();
    });

    $(".get_data").click(function(){
            // alert ('ok');
            var id =  $(this).attr('id');
             //alert(id);

                  var csrf_name = $("#get_csrf_hash").attr('name');
                  var csrf_val = $("#get_csrf_hash").val();
                  $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('admin/Product/product_details') ?>",
                    data: {'id' : 	id, '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php  echo $this->security->get_csrf_hash(); ?>'},
                    datatype: 'json',
                    success: function(data){

                       $(".body").html(data);
                    }
                  });
                });

              });



</script>
