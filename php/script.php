<?php


function script(){
    $skrip = "
            <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
		    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
		    <script src=\"bootstrap/js/bootstrap.min.js\"></script>
		    <script src=\"bootstrap/js/bootnavbar.js\"></script>

		    <script>
		    	$('#navbar').bootnavbar();
		    </script>
    ";

    echo $skrip;
}