<div class="right-container" >
    <div class="section-heading">
        <h2>JAVASCRIPT</h2>
        <h3><span>Home</span> / Javascript</h3>
    </div>
    <div class="dashboard-grid-2col">
        <div class="col-1 box-2">
            <button class="box-accordion">WINDOWS KEYBOARD SHORTKUTS</button>
                <div class="box-accordion-content">
                    <p>Win+A: Open the Action Center.</p>
                </div>  
            <button class="box-accordion">STOPPING WHILE LOOPS</button>
                <div class="box-accordion-content">          
<pre>
var process = true;
while(process === true) {
    document.getElementById("js-swl2").innerHTML = "Prosess is : " + process;
    process = false;
    document.getElementById("js-swl3").innerHTML = "Prosess is : " + process;
}
</pre>
                    <p id="js-swl2"></p>
                    <p id="js-swl3"></p>
                    <script>
                    var process = true;
                    while(process === true) {
                        document.getElementById("js-swl2").innerHTML = "Prosess is : " + process;
                        process = false;
                        document.getElementById("js-swl3").innerHTML = "Prosess is : " + process;
                    } 
                    </script> 
                <hr>                    
<pre>
var process = true;
while(process === true) {
    document.getElementById("js-swl1").innerHTML = "Prosess stop.";
    process = false;
}
</pre>
                    <p id="js-swl1"></p>
                    <script>
                    var process = true;
                    while(process === true) {
                        document.getElementById("js-swl1").innerHTML = "Prosess stop.(inside the code block,we stop the loop by setting process to false)";
                        process = false;
                    }    
                    </script> 
                </div>
            <button class="box-accordion">SELF-ASSIGNING VARIABLES</button>
                <div class="box-accordion-content">
                <pre>
var name = "User name : ";
name = name + " Vaidas ";
name = name + " Jonauskas";
document.getElementById("js-sa4").innerHTML = name;
</pre>
                    <p id="js-sa4"></p>
                    <script>
                    var name = "User name : ";
                    name = name + " Vaidas ";
                    name = name + " Jonauskas";
                    document.getElementById("js-sa4").innerHTML = name;    
                    </script>               
                    <hr>                    
<pre>
var wallet = 5;
wallet = wallet + 1;
wallet = wallet - 4;
document.getElementById("js-sa3").innerHTML = wallet;
</pre>
                    <p id="js-sa3"></p>
                    <script>
                    var wallet = 5;
                    wallet = wallet + 1;
                    wallet = wallet - 4;
                    document.getElementById("js-sa3").innerHTML = "Show : " + wallet;    
                    </script>               
                    <hr>
<pre>
var wallet = 5;
wallet = wallet + 1;
document.getElementById("js-sa2").innerHTML = wallet;
</pre>
                    <p id="js-sa2"></p>
                    <script>
                    var wallet = 5;
                    wallet = wallet + 1;
                    document.getElementById("js-sa2").innerHTML = "Show : " + wallet;    
                    </script>
                    <hr>
<pre>
var wallet = 5;
wallet = wallet;
document.getElementById("js-sa1").innerHTML = wallet;
</pre>
                    <p id="js-sa1"></p>
                    <script>
                    var wallet = 5;
                    wallet = wallet;
                    document.getElementById("js-sa1").innerHTML = "Show : " + wallet;    
                    </script>
                </div>
        </div>
        <div class="col-2 box-2">
            <button class="box-accordion">test</button>
                <div class="box-accordion-content">
                    <p>test</p>
                </div>
            <button class="box-accordion">CONTROLING WHILE LOOPS</button>
                <div class="box-accordion-content">
                <hr>
<pre>
var number = "";
var i = 5;
    while(i < 10){
        i++;
        number += "<.br.> number : " + i; 
    }
document.getElementById("js-cwl3").innerHTML = "shows number from 6 to 10 : ";
document.getElementById("js-cwl4").innerHTML = number;
</pre>
                    <p id="js-cwl3"></p>
                    <p id="js-cwl4"></p>
                    <script>
                    var number = "";
                    var i = 5;
                        while(i < 10){
                            i++;
                            number += "<br> number : " + i; 
                        }
                    document.getElementById("js-cwl3").innerHTML = "Shows number from 6 to 10 : ";
                    document.getElementById("js-cwl4").innerHTML = number;
                    </script>
                    <hr>
<pre>
var number = "";
var i = 5;
    while(i < 10){
        number += "<br> number : " + i; 
        i++;
    }
document.getElementById("js-cwl1").innerHTML = "shows number from 5 to 9 : ";
document.getElementById("js-cwl2").innerHTML = number;
</pre>
                    <p id="js-cwl1"></p>
                    <p id="js-cwl2"></p>
                    <script>
                    var number = "";
                    var i = 5;
                        while(i < 10){
                            number += "<br> number : " + i; 
                            i++;
                        }
                    document.getElementById("js-cwl1").innerHTML = "shows number from 5 to 9 : ";
                    document.getElementById("js-cwl2").innerHTML = number;
                    </script>
                </div>
            <button class="box-accordion">ASSIGN WITH OPERATORS</button>
                <div class="box-accordion-content">
<pre>
var cars = 5;
cars--;
document.getElementById("js-ao5").innerHTML = "Show : " + cars;
</pre>
                    <p id="js-ao5"></p>
                    <script>
                    var cars = 5;
                    cars--;
                    document.getElementById("js-ao5").innerHTML = "Show : " + cars;    
                    </script>
                <hr>
<pre>
var cars = 5;
cars++;
document.getElementById("js-ao4").innerHTML = "Show : " + cars;
</pre>
                    <p id="js-ao4"></p>
                    <script>
                    var cars = 5;
                    cars++;
                    document.getElementById("js-ao4").innerHTML = "Show : " + cars;    
                    </script>
                <hr>
<pre>
var cars = 5;
cars -= 1;
document.getElementById("js-ao3").innerHTML = "Show : " + cars;
</pre>
                    <p id="js-ao3"></p>
                    <script>
                    var cars = 5;
                    cars -= 1;
                    document.getElementById("js-ao3").innerHTML = "Show : " + cars;    
                    </script>
                <hr>
<pre>
var cars = 5;
cars += 1;
document.getElementById("js-ao2").innerHTML = "Show : " + cars;
</pre>
                    <p id="js-ao2"></p>
                    <script>
                    var cars = 5;
                    cars += 1;
                    document.getElementById("js-ao2").innerHTML = "Show : " + cars;    
                    </script>
                <hr>
<pre>
var likes = 5;
likes = likes + 1;
document.getElementById("js-ao1").innerHTML = "Show : " + likes;
</pre>
                    <p id="js-ao1"></p>
                    <script>
                    var likes = 5;
                    likes = likes + 1;
                    document.getElementById("js-ao1").innerHTML = "Show : " + likes;    
                    </script>
                </div>
        </div>
    </div>
</div>