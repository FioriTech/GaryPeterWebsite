<?php 
    $sub_folder = "html files/";
?>

<div class="menuitems">
    <h2 class="heading"><a id="home" href="index.php">Gary Peter Group</a></h2>
    <div class="firstulist">
        <a id="home" href="index.php" class="dropbtn">Home</a>
        <a id="investmentapproach" href="<?php echo $sub_folder ?>investmentapproach.php" class="dropbtn">Investment Approach</a>
        <a id="humanitarianwork" href="<?php echo $sub_folder ?>humanitarianwork.php" class="dropbtn">Humanitarian Work</a>
        <a id="contactus" href="<?php echo $sub_folder ?>humanitarianwork.php" class="dropbtn">Contact Us</a>
    </div>
</div>
<br />
<br />

<script type="application/javascript">
    var url = window.location.href.replace(/\/$/, '');
    var parts = url.split('/').pop();
    var lastSegment = parts.split(".")[0];
    document.getElementById(lastSegment).classList.add("active");

</script>
