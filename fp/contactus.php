<?php include "includes/header.php";?>

<!-- START LEFT COL -->
<section>
 <h2> Contact Choice Produce</h2>
 <?php
        /*
         * Below are 2 different forms to be re-used
         *
         * Only use one at a time, comment out the other!
         *
         */

        include 'includes/contact_include.php'; #site keys & code here

        $toAddress = "barnettedavid@gmail.com";  //place your/your client's email address here
        $toName = "Choice Produce"; //place your client's name here
        $website = "Choice Produce";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>

</section>
<!-- END LEFT COL -->

<?php include "includes/footer.php";?>
