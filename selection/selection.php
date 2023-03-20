<link rel="stylesheet" href="../controls/css/style.css" />
<section id="selectors">
        <div class="container">
            <h2>VTU SGPA & CGPA Calculator</h2>
            <h2>Select Discpline</h2>

            <div class="select-box">
                <div class="options-container">

                    <div class="option">
                        <input type="radio" class="radio" id="cse" name="category" />
                        <label for="cse"><a href="#" onclick="show('cse1')" ><button> Computer Science & Engineering</button></a>            </label>
                    </div>

                    <div class="option">
                        <input type="radio" class="radio" id="ece" name="category" />
                        <label for="ece"><a href="#" onclick="show('ec1')"><button> Electronics & Communication Engineering</button></a></label>
                    </div>

                    <div class="option">
                        <input type="radio" class="radio" id="ce" name="category" />
                        <label for="ce"><a href="#" onclick="show('civil1')"><button> Civil Engineering</button></a></label>
                    </div>

                    <div class="option">
                        <input type="radio" class="radio" id="me" name="category" />
                        <label for="me"><a href="#" onclick="show('me1')"><button> Mechanical Engineering</button></a></label>
                    </div>

                    <!-- <div class="option">
                        <input type="radio" class="radio" id="ml" name="category" />
                        <label for="ml"><a href="#" onclick="show('ml1')"><button> Machine Learnig Engineering</button></a></label>
                    </div> -->

                    <div class="option">
                        <input type="radio" class="radio" id="ai" name="category" />
                        <label for="ai"><a href="#" onclick="show('ai1')"><button> ARTIFICIAL INTELLIGENCE & DATA SCIENCE</button></a></label>
                    </div>



                </div>

                <div class="selected">
                    Select Discpline Category
                </div>
            </div>
        </div>
    </section>
<div id="cse1" style="display: none;">
<section id="selectors">
        <div class="container" id="container">
            <h2><b>DEPARTMENT OF COMPUTER SCIENCE ENGINEERING</b></h2>
            <h2 style="color:white;">Select Scheme to calculate your SGPA</h2>

            <p>Please wait while the page is loading</p>
            <div class="selected" id="selected">
            <div class="option">
                <a href="./2018Scheme/cse/cse.php"><button>2018 Scheme</button></a>
                        <br><br>
                    
                <a href="./2021Scheme/cse/cse.php"><button>2021 Scheme</button></a>
                    
                
            </div>
        </div>
    </section>
    <section id="knowl">
        <div class="info">
            <h4>Visson of CSE</h4> <br>
            <p>

                ” To become a centre of excellence, in the field of Computer Science and Engineering education and
                research, catering the needs of the industry and society “</p>
        </div>
    </section>
</div>

<div id="ml1" style="display: none;">
<section id="selectors">
        <div class="container" id="container">
            <h2><b>DEPARTMENT OF ML ENGINEERING</b></h2>
            <h2 style="color:white;">Select Scheme to calculate your SGPA</h2>

            <p>Please wait while the page is loading</p>
            <div class="selected" id="selected">
            <div class="option">                 
                <a href="./2021Scheme/ml/ml.php"><button>2021 Scheme</button></a>
                    
                
            </div>
        </div>
    </section>
    <section id="knowl">
        <div class="info">
            <h4>Visson of ML</h4> <br>
            <p>

                ” To become a centre of excellence, in the field of Computer Science and Engineering education and
                research, catering the needs of the industry and society “</p>
        </div>
    </section>
</div>



<div id="ai1" style="display: none;">
<section id="selectors">
        <div class="container" id="container">
            <h2><b>DEPARTMENT OF ARTIFICIAL INTELLIGENCE & DATA SCIENCE ENGINEERING</b></h2>
            <h2 style="color:white;">Select Scheme to calculate your SGPA</h2>

            <p>Please wait while the page is loading</p>
            <div class="selected" id="selected">
            <div class="option">
                <a href="./2021Scheme/ai/ai.php"><button>2021 Scheme</button></a>                
            </div>
        </div>
    </section>
    <section id="knowl">
        <div class="info">
            <h4>Visson of AI</h4> <br>
            <p>

                ” To become a centre of excellence, in the field of Computer Science and Engineering education and
                research, catering the needs of the industry and society “</p>
        </div>
    </section>
</div>

<div id="civil1" style="display: none;">
<section id="selectors">
        <div class="container" id="container">
            <h2><b>DEPARTMENT OF CIVIL ENGINEERING</b></h2>
            <h2 style="color:white;">Select Scheme to calculate your SGPA</h2>

            <p>Please wait while the page is loading</p>
            <div class="selected" id="selected">
                <div class="options-container">
                    <div class="option">
                        <a href="./2018Scheme/ce/civil.php"><button id="btn-2018">2018 Scheme</button></a><br><br>
                   
                        <a href="./2021Scheme/ce/civil.php"><button id="btn-2021">2021 Scheme</button></a>
                
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="knowl">
        <div class="info">
            <h4>Visson of Civil Engineering</h4> <br>
            <p>

                ” To establish a renowned centre to impart quality technical education, leadership qualities, professional ethics so as to contribute civil engineers to the society, capable of meeting global challenges “</p>
        </div>
    </section>
</div>

<div id="ec1" style="display: none;">
<section id="selectors">
        <div class="container" id="container">
            <h2><b>DEPARTMENT OF ELECTRONICS AND COMMUNICATION ENGINEERING</b></h2>
            <h2 style="color:white;">Select Scheme to calculate your SGPA</h2>

            <p>Please wait while the page is loading</p>
            <div class="selected" id="selected">
                <div class="options-container">
                    <div class="option">
                        <a href="./2018Scheme/ece/ec.php"><button id="btn-2018">2018 Scheme</button></a>
                        <br><br>
                        <a href="./2021Scheme/ece/ec.php"><button id="btn-2021">2021 Scheme</button></a>
                
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="knowl">
        <div class="info">
            <h4>Visson of ECE</h4> <br>
            <p>

                ” To emerge as an excellent technical education center and be an integral part in the development of advancing technologies and global challenges, in the field of Electronics and Communication Engineering “</p>
        </div>
    </section>
</div>

<div id="me1" style="display: none;">
<section id="selectors">
        <div class="container" id="container">
            <h2><b>DEPARTMENT OF MECHANICAL ENGINEERING</b></h2>
            <h2 style="color:white;">Select Scheme to calculate your SGPA</h2>

            <p>Please wait while the page is loading</p>
            <div class="selected" id="selected">
                <div class="options-container">
                    <div class="option">
                        <a href="./2018Scheme/me/mech.php"><button id="btn-2018">2018 Scheme</button></a>
                        <br><br>
                        <a href="./2021Scheme/me/mech.php"><button id="btn-2021">2021 Scheme</button></a>
                
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="knowl">
        <div class="info">
            <h4>Visson of Mechanical Engineering</h4> <br>
            <p>

                ”To become a center of excellence in Mechanical Engineering and contribute to technological and
                socio-economic developments “</p>
        </div>
    </section>
</div>
<script>function show(content) {
  document.getElementById('selectors').innerHTML = document.getElementById(content).innerHTML;

}
</script>
