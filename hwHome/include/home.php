<div class="container home-container">
    <h2>hwHome</h2>
    <p>
        <br>
        <form method="post" action="<?php echo htmlspecialchars('/hwHome/');?>">
            <label for="name">Name</label>
            <input autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" type="text" id="name" name="c" value="<?php echo @$_GET['s']; ?>">
            <input type="submit" name="submit" id="turnon" value="Send">
        </form>
        <br>
        <!-- <div>
            <?php
            //require_once(__DIR__.'/wake.php');
            ?>
        </div> -->
        <div id="ping"></div>
        <br>
        <div id="status"></div>
    </p>
</div>

<script>
function ping(){
    $.get( "./hwHome/ping.php", function(data) {
        $('#ping').html(data);
    });
}

$(function(){
    // ping
    ping();
    window.setInterval(function(){
        ping();
    }, 10000);

    // hibernate
    $('body').on('click', '#hibernate', function(){
        $.get( "./hwHome/hibernate.php", function(data) {
            $('#status').html('Done.');
        });
    });

    // turn on
    $('#turnon').click(function(e){
        e.preventDefault();
        $.post( "./hwHome/wake.php?c=002", { c: $('#name').val() }, function(data) {
            $('#status').html(data);
        });
    });
});
</script>