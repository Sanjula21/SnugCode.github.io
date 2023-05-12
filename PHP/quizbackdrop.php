<html>

    <body>

    <?php 
            //Write all the php regarding the quiz
            //Resource our last lab activity 
            //Make it so that the question appears first and then the answer gets pulled from the form
            // eg:- Q: Who in invented Ruby?
            //      A: (Whatever the answer is in the form)
    ?>




        Answers of <?php echo $_POST["First Name"]; ?> <?php echo $_POST["Last Name"]; ?><br>
        Student ID: <?php echo $_POST["Student id"]; ?>

        <br>
        <br>

        <strong>Q1: Is Ruby on Rails Declining or Growing?</strong>
                 A: <?php echo $_POST["Q1"]; ?>

        <?php
        $submittedA1 = $_POST["Q1"];
        $correctA1 = Decline;

        if (intval($submittedA1) === $correctA1) 
        {
         echo "Correct!";
        } 
        else 
        {
         echo "Incorrect...";
        }
        ?>

        <br>
        <br>

        <strong>Q2: What is the name of the developer of the language?</strong>
                 A: <?php echo $_POST["Q2"]; ?>

        <?php
        $submittedA2 = $_POST["Q2"];
        $correctA2 = Yukihiro Matsumoto;

        if (intval($submittedA2) === $correctA2) 
        {
         echo "Correct!";
        } 
        else 
        {
         echo "Incorrect...";
        }
        ?>

        <br>
        <br>

        <strong>Q3: What is Ruby</strong>
                 A: <?php echo $_POST["Q3"]; ?>

        <?php
        $submittedA3 = $_POST["Q3"];
        $correctA3 = Open Source Code;

        if (intval($submittedA3) === $correctA3) 
        {
         echo "Correct!";
        } 
        else 
        {
         echo "Incorrect...";
        }
        ?>

         <br>
         <br>

         <strong>Q4: Who is a key group or induvidial in the development and/or management of Ruby as of March 2023?</strong>
                  A: <?php echo $_POST["Q4"]; ?>

        <?php
        $submittedA4 = $_POST["Q4"];
        $correctA4 = Ruby Development Team;

        if (intval($submittedA4) === $correctA4) 
        {
         echo "Correct!";
        } 
        else 
        {
         echo "Incorrect...";
        }
        ?>

         <br>
         <br>

         <strong>Q5: What kind of tool is Ruby mainly used as?</strong>
                  A: <?php echo $_POST["Q5"]; ?>
    </body>

</html>