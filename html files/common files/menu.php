<?php 
    $root_url = "http://FioriTech.io/";
    $sub_folder = "html files/";
?>

<div class="firstulist">
        <a id="home" href="<?php echo $root_url ?>index.php" class="dropbtn">Home</a>
        <a id="investmentapproach" href="<?php echo $root_url.$sub_folder ?>investmentapproach.php" class="dropbtn">Investment Approach</a>
        <a id="humanitarianwork" href="<?php echo $root_url.$sub_folder ?>humanitarianwork.php" class="dropbtn">Humanitarian Work</a>
        <a id="contactus" href="<?php echo $root_url.$sub_folder ?>contactus.php" class="dropbtn">Contact Us</a>
</div>

<script type="application/javascript">
    var url = window.location.href.replace(/\/$/, '');
    var parts = url.split('/').pop();
    var lastSegment = parts.split(".")[0];
    document.getElementById(lastSegment).classList.add("active");
</script>