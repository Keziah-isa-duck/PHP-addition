<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> AlVilla Solutions </title>
        <link rel="icon" href="CSS - JavaScript/Images/Logo Black.png">

        <link rel="stylesheet" href="CSS - JavaScript/Navigation_Bars.css">
        <link rel="stylesheet" href="CSS - JavaScript/Scroll_Bar.css">
        <link rel="stylesheet" href="CSS - JavaScript/Home.css">
        <link rel="stylesheet" href="#">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="CSS - JavaScript/Navbar_Properties.js" ></script>
        <script src="CSS - JavaScript/Home.js" ></script>
    </head>

    <body style="background-image: url(Dark\ Mode.jpg);">
        <div class="Loader"> <img src="CSS - JavaScript/Videos/Untitled design.gif" alt=""> </div>
        <!--Horizontal Navigation Bar-->
        <header id="proven" class="Horizontal_Navigation_Bar_Wrapper">

            <img onclick="NavBarToggle()" id="Menu" src="CSS - JavaScript/Images/hamburger.png" alt="Menu">      
            <img id="Logo" src="CSS - JavaScript/Images/Logo White.png" alt="Logo" title="AlVilla Solutions">
            <h1 id="TitleAL" class="Alvilla" >AlVilla Solutions</h1>


            <a class="Horizontal_Navigation_List1" href="Booking.html" class="Horizontal_Navigation_Text"> BOOKING </a>
            <img class="Horizontal_Navigation_List2" style="height: auto; width: 2rem;" src="CSS - JavaScript/Images/profile-user.png" title="Account">

        </header>
        <!--Horizontal Navigation Bar-->



        <!--Vertical Navigation Bar-->        
        <header id="Vertical_Navigator" class="Vertical_Navigation_Bar_Wrapper">
            <nav class="Selection_Menu">
                <ul>
                    <li class="Active">
                        <a href="index.html" title="Home" ><img id="NavSym" src="CSS - JavaScript/Images/home.png"></a>
                        <a id="NavSymbols1" href="Home.html" class="Vertical_Navigation_Text"> Home </a>
                    </li>

                    <li class="Vertical_Navigation_List">
                        <a href="Explore.html" title="Explore" ><img id="NavSym" src="CSS - JavaScript/Images/programming-code-signs.png"></a>
                        <a id="NavSymbols11" href="Explore.html" class="Vertical_Navigation_Text"> Explore </a>
                    </li>

                    <li class="Vertical_Navigation_List">
                        <a href="Help.html" title="Help" ><img id="NavSym" src="CSS - JavaScript/Images/information.png"></a>
                        <a id="NavSymbols12" href="Help.html" class="Vertical_Navigation_Text"> Help</a>
                    </li>
                </ul>
                
            <center><div id="NavSymbols5" class="LineBeak"></center>

            <h4 id="NavSymbols2" class="Recommended_Consultants"> 
            <center>
                Recommended
                Consultants
            </center>
            </h4>

            <div id="NavSymbols3" class="Consultant_Menu">
                <ul>
                    <li class="Consultant_Menu_List">
                        <a href="" class="Consultant_Name">  Ghen Benedict </a>
                        <br>
                        <a style="font-size: 12px;" href="" class="Consultant_Skill"> Skill1 </a>
                    </li>

                    <li class="Consultant_Menu_List">
                        <a href="" class="Consultant_Name"> Carlos Macalolot </a>
                        <br>
                        <a style="font-size: 12px;" href="" class="Consultant_Skill"> Skill1 </a>
                    </li>

                    <li class="Consultant_Menu_List">
                        <a href="" class="Consultant_Name"> Baxter Something </a>
                        <br>
                        <a style="font-size: 12px;" href="" class="Consultant_Skill"> Skill1 </a>
                    </li>

                    <li class="Consultant_Menu_List">
                        <a href="" class="Consultant_Name"> Joshua Brionesx </a>
                        <br>
                        <a style="font-size: 12px;" href="" class="Consultant_Skill"> Skill1 </a>
                    </li>
                </ul>
                </ul>
            </div>
            <div id="NavSymbols4" class="Button_Wrapper">
                <a href="#Footer"><button class="Contact_Us" title="Contact Information"> Contact Us </button></a>
            </div>
            </nav>
        </header>
        <!--Vertical Navigation Bar-->     
        

<!------------------------------------------------------------------------------------------------------------------------------------------------->

        
        <div id="Expander" class="Content_Home">
            <div class="Introduction_Wrapper">
                <div class="Introductory_Text">
                    <h1> A WEBSITE FOR ALL YOUR CODING NEEDS </h1>
                    <p style="text-align: justify;">
                        AlVilla Solutions offers comprehensive coding services, including web and app development, tutoring, and program consulting, catering to diverse needs. Whether you're a business seeking a sleek website or an individual looking to enhance coding skills, we are your all-encompassing solution.

                    </p>
                    <p id="Get_Started_Link"><a href="Explore.html"> Get Started </a></p>
                </div>

                <img src="CSS - JavaScript/Images/Person1.png">
            </div>  





            <h2> Credits </h2>
            <p class="Coverage-P"> 
                We combine knowledge, creativity, and attention to detail to make sure every project we work on is extraordinary. We have built a reputation for going above and beyond to fulfill the demands of our clients by putting a strong emphasis on providing excellence in all areas of our services.
            </p>

            <div class="Image_Gallery_Codes">
                <div class="Credential_List1">
                    "Tailored Solutions"
                </div>

                <div class="Credential_List2">
                    “Revolutionary Thinking”
                </div>

                <div class="Credential_List3">
                    “Timely Deliveries”
                </div>

                <div class="Credential_List4">
                    “Work Excellence”
                </div>

                <div class="Credential_List5">
                    “Programming with Care”
                </div>
                
                <div class="Credential_List6">
                    "Syntax Perfect"
                </div>


            </div>

            <div class="Featurette">
                <div class="Featurette_List">
                    <p href="" class="Item1">
                        <center><h1 style="padding: 2rem 2rem 1rem 2rem;"> Our Credentials </h1></center>
                        Our team consists of well-seasoned programmers who are experts in their respective fields. Equipped with a wide range of skills and backgrounds, they are the vanguard of our technical solutions. Each programmer is committed to pushing the limits of what is conceivable in the realm of coding. Together, they can solve hard problems and produce code that not only satisfies but also surpasses your expectations. Learn about the faces who are passionate about bringing your digital visions to life and the faces behind our coding success.

                    </p>
                </div>
                <img src="CSS - JavaScript/Images/our-team.jpg" alt="Alvilla Consultant Team" title="Alvilla Team" class="Item2">
            </div>







            <h2 style="margin-bottom: 0rem;"> What Do We Cover? </h2>
            <p class="Coverage-P"> 
                We have your programming needs covered with a focused curriculum that includes C Language, HTML, JavaScript, and Python. Whether you're looking to master the fundamentals of coding or dive into the world of web development, our courses are designed to equip you with the knowledge and skills you need. Additionally, we understand that the programming landscape is vast and continually evolving. That's why we offer other programming languages upon request, ensuring that your specific learning goals are met. Our commitment to providing a flexible and tailored education experience is the mission we aim to achieve.


                </p>
            <div class="Map_Embed">
                <iframe style="border-radius: 3px; border: solid 1px rgba(255, 255, 255, 0.5);" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62998.7685371761!2d123.28206739999999!3d9.295732150000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33ab6edb788ea0f7%3A0xd79dfe9b5bfc37fb!2sDumaguete%2C%20Negros%20Oriental!5e0!3m2!1sen!2sph!4v1698053253035!5m2!1sen!2sph" 
                width="600rem" height="250rem" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" zoom="20">
                </iframe>
            </div>
            <p class="Coverage-P"> 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto 
            inventore voluptate eligendi corporis quaerat error sint aliquid 
            dolorem impedit? Optio?
            </p>

            <div class="CoverageMenu">
                <div class="CoverageList1">
                    <center><img onclick="Ctoggle()" style="cursor: pointer;" id="C" src="CSS - JavaScript/Images/C.png" alt="C Language" title="C coding language"></center>
                    <h3> <center>C Language</center> </h3>
                    <br>
                    <p id="Clang" style="background-color: rgba(127, 255, 212, 0); border-radius: 5px;"> 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto 
                        inventore voluptate eligendi corporis quaerat error sint aliquid 
                        dolorem impedit? Optio? 
                    </p>
                    <p id="INFORLEARN" ><br><a class="Information_LearnMore" target="_blank" href="https://en.wikipedia.org/wiki/C_(programming_language)"> Learn More </a></p>
                </div>
                

                <div class="CoverageList2">
                    <center><img onclick="Htoggle()" style="cursor: pointer;"  id="HTML" src="CSS - JavaScript/Images/HTML.png" alt="HTML Language" title="Hyper Text Markup Language"></center>
                    <h3> <center>HTML</center> </h3>
                    <br>
                    <p id="Hlang" style="background-color: rgba(127, 255, 212, 0); border-radius: 5px;"> 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto 
                        inventore voluptate eligendi corporis quaerat error sint aliquid 
                        dolorem impedit? Optio? 
                    </p>
                    <p id="INFORLEARN" ><br><a class="Information_LearnMore" target="_blank" href="https://en.wikipedia.org/wiki/HTML"> Learn More </a></p>
                </div>

                <div class="CoverageList3">
                    <center><img onclick="Jtoggle()" style="cursor: pointer;"  id="JAVA" src="CSS - JavaScript/Images/JAVA.png" alt="JAVASCRIPT Language" title="Java Script"></center>
                    <h3> <center>Java Script</center> </h3>
                    <br>
                    <p id="Jlang" style="background-color: rgba(127, 255, 212, 0); border-radius: 5px;"> 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto 
                        inventore voluptate eligendi corporis quaerat error sint aliquid 
                        dolorem impedit? Optio? 
                    </p>
                    <p id="INFORLEARN" ><br><a class="Information_LearnMore" target="_blank" href="https://en.wikipedia.org/wiki/JavaScript"> Learn More </a></p>
                </div>

                <div class="CoverageList4">
                <center><img onclick="Ptoggle()" style="cursor: pointer;"  id="PYTHON" src="CSS - JavaScript/Images/PYTHON.png" alt="Python Language" title="Python"></center>
                <h3> <center>Python</center> </h3>
                <br>
                    <p id="Plang" style="background-color: rgba(127, 255, 212, 0); border-radius: 5px;"> 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto 
                        inventore voluptate eligendi corporis quaerat error sint aliquid 
                        dolorem impedit? Optio? 
                    </p>
                    <p id="INFORLEARN" ><br><a class="Information_LearnMore" target="_blank" href="https://en.wikipedia.org/wiki/Python_(programming_language)"> Learn More </a></p>
                </div>
            </div>





            <div class="About_Us">
                <h2> About us </h2>
            

            </div>


<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


            <!--Footer - TOP-->
            <footer id="Footer" class="Footer_Wrapper">
                <div class="Footer_List">
                    <h5>HELP</h5>
                    <ul>
                        <li>
                            <a href="#"> Testing </a>
                        </li>
                        <li>
                            <a href="#"> Testing 1 </a>
                        </li>
                        <li>
                            <a href="#"> Testing 2 </a>
                        </li>
                        <li>
                            <a href="#"> Testing 3 </a>
                        </li>
                    </ul>
                </div>
                <div class="Footer_List">
                    <h5>ABOUT ALVILLA</h5>
                    <ul>
                        <li>
                            <a href="#"> Testing </a>
                        </li>
                        <li>
                            <a href="#"> Testing 1 </a>
                        </li>
                        <li>
                            <a href="#"> Testing 2 </a>
                        </li>
                        <li>
                            <a href="#"> Testing 3 </a>
                        </li>
                    </ul>
                </div>
                <div class="Footer_List1">
                    <h5>PAYMENT</h5>
                    <div class="Footer_Payment">
                        <a href="#"> <img class="Footer_ImageMoney"    src="#"     alt="BDO"   ></a>
                        <a href="#"> <img class="Footer_ImageMoney"    src="#"     alt="LANDBANK"   ></a>
                        <a href="#"> <img class="Footer_ImageMoney"    src="#"     alt="UNIONBANK"   ></a>
                        <a href="#"> <img class="Footer_ImageMoney"    src="#"     alt="GCASH"   ></a>
                    </div>
                </div>
                <div class="Footer_List">
                    <h5>FOLLOW US</h5>
                    <ul>
                        <li>
                            <a href="#"> Testing </a>
                        </li>
                        <li>
                            <a href="#"> Testing 1 </a>
                        </li>
                        <li>
                            <a href="#"> Testing 2 </a>
                        </li>
                        <li>
                            <a href="#"> Testing 3 </a>
                        </li>
                    </ul>
                </div>

                <p class="Footer_Credits">"Midterm Website Design" @ALVILLA Solutions, CCS, Silliman University, 2023</p>
            </footer>
            <!--Footer - BOTTOM-->
        </div>
    
        <?php 
        ?>
    </body>
</html>