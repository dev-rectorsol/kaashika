  <script src="<?php echo base_url(); ?>/vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">

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


</script>
