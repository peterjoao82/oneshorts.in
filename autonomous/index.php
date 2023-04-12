<?php include('../controls/20header.php'); ?>

    <section id="knowl">
        <div class="info">
            <h4>SGPA Calculator | Calculate SGPA OnLine</h4>
            <p>
                Use the SGPA Calculator to ascertain your SGPA score.<br /> SGPA Calculator may be a free on-line tool that enables Any University students or graduates to simply calculate their SGPA.<br /> To calculate it properly, enter the Marks that you just scored up to the subjects you have!.
            </p>
        </div>
    </section>

    <div id="designn">
        <div class="design">
            <div class="title">

                <h3>Welcome to Online Calculator</h3><br />
                <h5>Enter your subjects Marks & credits Too</h5>
            </div>
            <p><center> Enter marks out of 100</center></p>

            <div class="design1">
                <label class="color">Subject 1:</label>
                <input type="number" placeholder="[ 0 - 100 ]" id="n1">
                <input type="number" placeholder="Credits" id="m1">
            </div>
            <div class="design1">
                <label class="color">Subject 2:</label>
                <input type="number" placeholder="[ 0 - 100 ]" id="n2">
                <input type="number" placeholder="Credits" id="m2">
            </div>
            <div class="design1">
                <label class="color">Subject 3:</label>
                <input type="number" placeholder="[ 0 - 100 ]" id="n3">
                <input type="number" placeholder="Credits" id="m3">
            </div>
            <div class="design1">
                <label class="color">Subject 4:</label>
                <input type="number" placeholder="[ 0 - 100 ]" id="n4">
                <input type="number" placeholder="Credits" id="m4">
            </div>
            <div class="design1">
                <label class="color">Subject 5:</label>
                <input type="number" placeholder="[ 0 - 100 ]" id="n5">
                <input type="number" placeholder="Credits" id="m5">
            </div>
            <div class="design1">
                <label class="color">Subject 6:</label>
                <input type="number" placeholder="[ 0 - 100 ]" id="n6">
                <input type="number" placeholder="Credits" id="m6">
            </div>
            <div class="design1">
                <label class="color">Subject 7:</label>
                <input type="number" placeholder="[ 0 - 100 ]" name="" id="n7">
                <input type="number" placeholder="Credits" id="m7">
            </div>

            <div class="design1">
                <label class="color">Subject 8:</label>
                <input type="number" placeholder="[ 0 - 100 ]" name="" id="n8">
                <input type="number" placeholder="Credits" id="m8">
            </div>
            <div class="design1">
                <label class="color">Subject 9:</label>
                <input type="number" placeholder="[ 0 - 100 ]" name="" id="n9">
                <input type="number" placeholder="Credits" id="m9">
            </div>
            <div class="design1">
                <label class="color">Subject 10:</label>
                <input type="number" placeholder="[ 0 - 100 ]" name="" id="n10">
                <input type="number" placeholder="Credits" id="m10">
            </div>

            
            <div class="final">
                <div class="cal">
                    <input type="button" class="btn btn-primary" id="" value="Calculate" onclick="sgpa(),show('operation1')" />
                </div>
                
            </div>


        </div>
    </div>
    <div id="operation1" style="display: none;">
        <div class="main" style="display: -moz-grid-line;
        justify-content: center;align-items: center;

        font-family: 'Roboto Mono', monospace;">
        <h3>Welcome to oneshorts Calculator</h3>
        <p>Congratulations on your result! Whether it's an academic achievement, a professional success,<br> or a personal goal you've been working towards, it's a testament to your hard work and dedication.<br> Your accomplishment is something to be proud of,<br> and I hope you take the time to celebrate and enjoy your well-deserved success. <br>Keep up the great work, and I wish you continued success in all your future endeavors.</p>
            <table id="output">
                <thead>
                
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

    <section id="knowl">
        <div class="info">
            <h4>How to Use SGPA Calculator?</h4>
            <p>

                SGPA Calculator is to form your Marks and grades calculation easier. <br />This can be a free on-line tool to assist the University students. <br />We all know that calculating SGPA is easy, however the general public don�t wish to pay a lot of time on manual arithmetic as a result of the provision of OnLine tools. <br />Here, we'll show you the way to calculate your SGPA faster:
            </p>

            <h4>Open the SGPA Calculator.</h4>
            <p>
                Enter your Total Marks. <br />
                Click on the "<b>Calculate SGPA</b>" button to show your SGPA.<br />
                Done.! currently your SGPA are going to be displayed below the button.
            </p>




            <h4>Difference between SGPA and CGPA</h4>
            <p>

                In Colleges, SGPA could be a score that a student receives as a live of educational performance in a very semester.<br /> And, CGPA could be a live of overall additive performance of a student over all the 'n' semesters.
            </p>

        </div>
    </section>


    
    <script src="./main.js"></script>
<?php include('../controls/20footer.php'); ?>