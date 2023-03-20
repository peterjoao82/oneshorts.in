<?php include('../../controls/21header.php'); ?>
<section id="designn">
        <div class="design">
            <div class="title">
                <h5>Enter your subjects Marks</h5>

            </div>
            <p>
                <center> Enter marks out of 100</center>
            </p>
            <div class="row_main">
                <div class="row">
                    <div class="design1">
                        <label class="color">21CS81 :</label>
                        <input type="number" placeholder="[0 - 100]" id="ME3_1">
                    </div>
                    <div class="design1">
                        <label class="color">21INT82 :</label>
                        <input type="number" placeholder="[0 - 100]" id="ME3_2">
                    </div>
                    <div class="design1">
                        <label class="color">21**83 :</label>
                        <input type="number" placeholder="[0 - 100]" id="ME3_3">
                    </div>
                   
                </div>
               
            </div>



            <div class="final">
                <div class="cal">
                    <!-- <form method="get" action="table.html"> -->
                    <input type="submit" class="btn btn-primary" id="" value="calculate"
                        onclick="me34(),show('operation1')" />
                    <!-- </form> -->

                </div>
                
            </div>

           

        </div>
    </section>

    <div id="operation1" style="display: none;">
        <div class="main" style="display: -moz-grid-line;
        justify-content: center;align-items: center;

        font-family: 'Roboto Mono', monospace;">
        <h3>Welcome to oneshorts Calculator</h3>
        <p>Congragulations for obtaining great result</p>
            <table id="output">
                <thead>
                    <td>Subject Code</td>
                    <td>Total Credits</td>
                    <td>Total Marks</td>
                    <td>Grade</td>
                    <td>Grade Point</td>
                    <td>Obtained Credits</td>
                </thead>
                <tbody></tbody>
            </table>

            <div class="cgpa">
                <h3>SGPA = <output type="number" placeholder="Result" id="CGPA" /> </h3>
            </div>
            <div class="cgpa">
                <h3>Percentage = <output id="perc" typeof="text" /> </h3>
            </div>
            <div class="but">
                <button class="btn-cgpa3" onclick="printDiv()">Download Result</button>
            </div>
            <div class="reset">
                    <button type="reset"><a href="">Reset</a></button>

                </div>
        </div>
    </div>
    <style>
        table,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            padding: 10px;
        }
    </style>


    <script src="./js/cs8.js"></script>
    <?php include('../../controls/21footer.php'); ?>