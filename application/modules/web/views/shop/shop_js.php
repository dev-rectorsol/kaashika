<script src="<?php echo base_url() ?>/assets/js/vendor/jquery-3.3.1.min.js"></script>
<script type="text/javascript">

  $(document).ready(function() {

    $(".color").change(function(event) {
       // alert('ok');
      var name = $(this).val();
      var id = $('#c_id').val();
      //console.log(id);
       // alert(id);
       // alert(name);
      var csrf_name = $("#get_csrf_hash").attr('name');
      var csrf_val = $("#get_csrf_hash").val();
      $.ajax({
        type: "POST",
        url: "<?php echo base_url('web/shop/color') ?>",
        data: {
          'name': name,'id': id,
          '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php  echo $this->security->get_csrf_hash(); ?>'
        },
        datatype: 'json',
        success: function(data) {
          $("#details").html(data);
        }

      });

    });



    var rangeSlider = $(".price-range"),
    		amount = $("#amount"),
    		minPrice = rangeSlider.data('min'),
    		maxPrice = rangeSlider.data('max');
    	rangeSlider.slider({
    		range: true,
    		min: minPrice,
    		max: maxPrice,
    		values: [minPrice, maxPrice],
    		slide: function (event, ui) {
    		amount.val(ui.values[0] + " - " + ui.values[1]);
    		}
    	});

    $("#rang").click(function(){
    var myString =$("#amount").val();
    // alert(a);
    array = myString.split('-');
    var min = (array[0]);
    var max = (array[1]);
    var id = $('#color_id').val();

    $.ajax({
      type: "POST",
      url: "<?php echo base_url('web/shop/price') ?>",
      data: {
        'min': min,'max':max,'id': id,
        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php  echo $this->security->get_csrf_hash(); ?>'
      },
      datatype: 'json',
      success: function(data) {
        $("#details").html(data);
      }

    });
// alert(min);
// alert(max);
     //alert(res);
    });

  });
</script>
