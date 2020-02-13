<div id="styleSelector">

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="<?= base_url('vendor/'); ?>files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url('vendor/'); ?>files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?= base_url('vendor/'); ?>files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="<?= base_url('vendor/'); ?>files/bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?= base_url('vendor/'); ?>files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?= base_url('vendor/'); ?>files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="<?= base_url('vendor/'); ?>files/bower_components/modernizr/js/css-scrollbars.js"></script>
<!-- amchart js -->
<script src="<?= base_url('vendor/'); ?>files\assets\pages\widget\amchart\amcharts.js"></script>
<script src="<?= base_url('vendor/'); ?>files\assets\pages\widget\amchart\serial.js"></script>
<script src="<?= base_url('vendor/'); ?>files\assets\pages\widget\amchart\light.js"></script>
<!-- Chart js -->
<script type="text/javascript" src="<?= base_url('vendor/'); ?>files\bower_components\chart.js\js\Chart.js"></script>

<!-- i18next.min.js -->
<script type="text/javascript" src="<?= base_url('vendor/'); ?>files/bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="<?= base_url('vendor/'); ?>files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="<?= base_url('vendor/'); ?>files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="<?= base_url('vendor/'); ?>files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<script src="<?= base_url('vendor/'); ?>files/assets/js/pcoded.min.js"></script>
<script src="<?= base_url('vendor/'); ?>files/assets/js/vartical-layout.min.js"></script>
<script type="text/javascript" src="<?= base_url('vendor/'); ?>files\assets/pages/dashboard/analytic-dashboard.min.js"></script>
<script src="<?= base_url('vendor/'); ?>files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="<?= base_url('vendor/'); ?>files/assets/js/script.js"></script>
<script type="text/javascript" src="<?= base_url('vendor/'); ?>files\assets\pages\social-timeline\social.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->

<script>
  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('//').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });
</script>

<script>
  $('.form-check-input').on('click', function() {
    const menuId = $(this).data('menu');
    const roleId = $(this).data('role');

    $.ajax({
      url: "<?= base_url('admin/changeaccess'); ?>",
      type: 'post',
      data: {
        menuId: menuId,
        roleId: roleId
      },
      success: function() {
        document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
      }
    });
  });
</script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

</html>