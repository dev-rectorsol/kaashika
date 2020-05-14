<script src="<?php echo base_url() ?>/assets/js/vendor/jquery-3.3.1.min.js"></script>
<script type="text/javascript">

  $(document).ready(function() {

    $(".category").click(function(event) {
       // alert('ok');
      var id = $(this).attr('id');
      console.log(id);
      // alert(id);
      var csrf_name = $("#get_csrf_hash").attr('name');
      var csrf_val = $("#get_csrf_hash").val();
      $.ajax({
        type: "POST",
        url: "<?php echo base_url('web/Home/arivel_slider') ?>",
        data: {
          'id': id,
          '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php  echo $this->security->get_csrf_hash(); ?>'
        },
        datatype: 'json',
        success: function(data) {
          $(".data_body").html(data);
        }

      });

    });

  });
</script>
