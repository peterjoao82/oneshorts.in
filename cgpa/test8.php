<?php include('../controls/20header.php'); ?>
    <section id="knowl">
        <div class="info">
            <h4>VTU CGPA Calculator | Calculate VTU CGPA Online</h4>
            <p>
                Use the VTU Calculator to ascertain your SGPA & CGPA score.
                <br />VTU Calculator is a free online tool that enables VTU university students or graduates to simply calculate their Marks.<br /> To accurately calculate the marks, enter the Total marks that you have scored throughout  all the semesters or up to the semester you have completed.
            </p>
        </div>
    </section>
    <section id="designn">
        <div class="design">
            <div class="title">
                <h3>VTU CGPA CALCULATOR</h3>
                <p>To calculate, enter your grades for each semester.</p>
            </div>
            <div class="row_main">
                <div class="row">
                    <div class="design1">
                        <label class="color">Sgpa Of 1st Semester :</label>
                        <input type="text" size="4" maxlength="4" id="n1" placeholder="[ 0-10 ]" />
                    </div>
                    <div class="design1">
                        <label class="color">Sgpa Of 2st Semester :</label>
                        <input type="text" size="4" maxlength="4" id="n2" placeholder="[ 0-10 ]" />
                    </div>
                    <div class="design1">
                        <label class="color">Sgpa Of 3rd Semester :</label>
                        <input type="text" size="4" maxlength="4" id="n3" placeholder="[ 0-10 ]" />
                    </div>
                    <div class="design1">
                        <label class="color">Sgpa Of 4th Semester : </label>
                        <input type="text" size="4" maxlength="4" id="n4" placeholder="[ 0-10 ]" />
                    </div>
                </div>
                <div class="row">
                    <div class="design1">
                        <label class="color">Sgpa Of 5th Semester :</label>
                        <input type="text" size="4" maxlength="4" id="n5" placeholder="[ 0-10 ]" />
                    </div>
                    <div class="design1">
                        <label class="color">Sgpa Of 6th Semester :</label>
                        <input type="text" size="4" maxlength="4" id="n6" placeholder="[ 0-10 ]" />
                    </div>
                    <div class="design1">
                        <label class="color">Sgpa Of 7th Semester :</label>
                        <input type="text" size="4" maxlength="4" id="n7" placeholder="[ 0-10 ]" />
                    </div>
                    <div class="design1">
                        <label class="color">Sgpa Of 8th Semester :</label>
                        <input type="text" size="4" maxlength="4" id="n8" placeholder="[ 0-10 ]" />
                    </div>
                </div>
            </div>
           
            
            <p><center> Double Click on Calculate Button</center></p>
            <p><center> Reset always before entering new value</center></p>
            <div class="final">
                
                <div class="cal">
                    <input type="button" class="btn btn-primary" id="liveToastBtn" value="calculate" onclick="add()" />
                </div>
                <div class="reset">
                    <button type="reset"><a href="">Reset</a></button>

                </div>
                <div class="but">
                    <button class="btn-cgpa3" onclick="window.print()">Download Result</button>
                </div>
            </div>
            <div class="cen">
                <div class="cgpa">
                    <h3>CGPA = <output type="number" placeholder="Result" id="CGPA" /> </h3>
                </div>
                <div class="cgpa">
                    <h3>Percentage = <output type="number" placeholder="Result" id="per" /> </h3>
                </div>
                
            </div>
           
        </div>

    </section>
   
    <section id="knowl">
        <div class="info">
            <h4>How to Use VTU CGPA Calculator?</h4>
            <p>

                VTU CGPA Calculator is to form your VTU marks and grades calculation easier. <br />This can be a free on-line tool to assist the VTU (Visveswaraiah Technological University) students. <br />We all know that calculating CGPA is easy, however the general public don’t wish to pay a lot of time on manual arithmetic as a result of the provision of on-line tools. <br />Here, we'll show you the way to calculate your CGPA faster:
            </p>

            <h4>Open the VTU CGPA Calculator.</h4>
            <p>
                Enter your Total SGPA for semesters one to eight. <br />Leave the fields blank, if any semesters aren't completed.<br />
                Click on the ‘<b>Calculate CGPA</b>‘ button to show your CGPA.<br />
                Done.! currently your CGPA are going to be displayed below the button.
            </p>

            <h4>How is VTU CGPA calculated?</h4>
            <p>
                VTU CGPA is calculated by the formula CGPA = ∑(Ci x Si) / ∑ Ci. <br />Here, Si is that the SGPA of the ith semester and Ci is that the total range of credits obtained therein semester. <br />CGPA shall be rounded off to 2 decimal points.
            </p>
            <p>See <a href="https://vtu.ac.in/">VTU official web site</a> for additional information.</p>

            <h4> What is the formula to calculate CGPA in VTU</h4>
            <p>
                CGPA = ∑(Ci x Si) / ∑ Ci<br />

                where Si is that the SGPA of the ith semester and Ci is that the total range of credits obtained therein semester.<br />

                CGPA in VTU may be calculated victimization the formula CGPA = (Your mixture proportion / 10) + zero.75. <br />Means, if you've got sixty.50% as mixture then CGPA is six.80. CGPA conversion is that easy.
            </p>
            <h4>Difference between SGPA and CGPA in VTU</h4>
            <p>

                In VTU, SGPA could be a score that a student receives as a live of educational performance in a very semester.<br /> And, CGPA could be a live of overall additive performance of a student over all the eight semesters.
            </p>
            <p><li><a href="https://results.vtu.ac.in/">Check lastest VTU results.</a></li></p>
        </div>
    </section>


   

    <script src="test.js">
        
    </script>
<?php include('../controls/20footer.php'); ?>