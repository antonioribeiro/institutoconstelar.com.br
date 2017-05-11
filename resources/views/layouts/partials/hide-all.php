<style>
    #hideAll
    {
        position: fixed;
        left: 0px;
        right: 0px;
        top: 0px;
        bottom: 0px;
        background-color: white;
        z-index: 9999; /* Higher than anything else in the document */
    }
</style>

<script type="text/javascript">
    document.getElementById("hideAll").style.display = "block";

    window.onload = function() {
        document.getElementById("hideAll").style.display = "none";
    };
</script>
