<?php
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>GBOX - Home</title>
        <link href="SignUpStyle.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Francois+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@700&family=Fira+Mono:wght@700&family=Francois+One&display=swap" rel="stylesheet"> 
        <link href="all.css" rel="stylesheet">
        
    </head>
    <body>
        <header>
            <div class="navBar">
               
                <nav>
                    <img src="control.jpg" height="50" width="55" style="right: 14;">
                    <p class ="home">GBOX</p>
                    <ul class="nav_ul">
                        <li class ="nav_li"><a href="#" class="nav_a">News</a></li>
                        <li class ="nav_li"><a href="#" class="nav_a">Reviews</a></li>
                        <li class ="nav_li"><a href="#" class="nav_a">Best Selling</a></li>
                        <li class ="nav_li"><a href="#" class="nav_a">Videos</a></li>
                        <li class ="nav_li"><a href="#" class="nav_a">Forum</a></li>
                    </ul>
                    <div class="user"><a href="#"><img src="user-solid.svg" alt="Account" width="20" height="20"></a></div>
                </nav>
                </div>
                </header>
                            <div class="vallhala">
                                <form method="post" action="auth.php">
                                    <div id="fullname"></div>
                                    <input type="text" placeholder="Fullname" name="fullname" class="input Case1" id="case1">
                                    <div class="email"></div>
                                    <input type="email" placeholder="E-Mail" name="email" class="input Case2">
                                    <div class="username"></div>
                                    <input type="text" placeholder="Username" name="username" class="input Case3">
                                    <div class="password"></div>
                                    <input type="password" placeholder="Password" name="password" class="input Case4" required data-errormessage-value-missing="Please input something">
                                    <div class="confirmpassword"></div>
                                    <input type="password" placeholder="Confirm Password" name="confirmPassword" class="input Case5">
                                    
                                    <select class="day" name="day" required>
                                        <option value="" selected>Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option>
                                        <option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option>
                                        <option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option>
                                        <option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option>
                                        <option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option>
                                        <option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
                                    </select>
                                    <select class="month" name="month" required>
                                        <option value="" selected>Month</option>
                                        <option value="1">January</option><option value="2">February</option><option value="3">March</option><option value="4">April</option><option value="5">May</option><option value="6">June</option>
                                        <option value="7">July</option><option value="8">Augest</option><option value="9">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option>
                                    </select>
                                
                                <select class="year" name="year" required>
                                <option value=""selected>Year</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option>
                                    <option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option>
                                    <option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option>
                                    <option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option>
                                    <option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option>
                                    <option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option>
                                    <option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option>
                                    <option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option>
                                    <option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option>
                                    <option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option>
                                    <option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option>
                                    <option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option>
                                    <option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option>
                                    <option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option>
                                    <option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option>
                                    <option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option>
                                    <option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option>
                                    <option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option>
                                    <option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option>
                                    <option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option>
                                    <option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option>
                                    <option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option>
                                    <option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option>
                                    <option value="1905">1905</option>
                                </select>
                                
                                <input type="submit" name="submit" class="inputButton" value="Sign Up">

                                </form>
                               
                               
                                <img src="vallhala.jpg" class="vallhalaImg" >
                                <div class="privacy">By creating an account, you agree to our <a href="#" class="terms">Terms of Use</a>, and acknowledge the data practices in our <a href="#" class="terms">Privacy Policy</a>.</div>
                            </div>
                            <footer>
                                <div class="footer">
                                  <ul class="plateforme"><span class="plateformeT">Plateforme</span>
                                      <li><a href="#" class="aFooter">All</a></li>
                                      <li><a href="#" class="aFooter">PlayStation 5</a></li>
                                      <li><a href="#" class="aFooter">PlayStation 4</a></li>
                                      <li><a href="#" class="aFooter">XBOX Series X</a></li>
                                      <li><a href="#" class="aFooter">XBOX ONE</a></li>
                                      <li><a href="#" class="aFooter">PC</a></li>
                                      <li><a href="#" class="aFooter">NINETENDO SWITCH</a></li>
                                  </ul> 
                                  <ul class="socialMedia"><span class="socialMediaT">Social Media</span>
                                    <li><a href="#" class="aFooter">Facebook</a></li>
                                    <li><a href="#" class="aFooter">Instagram</a></li>
                                    <li><a href="#" class="aFooter">Twitter</a></li>
                                    <li><a href="#" class="aFooter">Pinetrest</a></li>
                                    <li><a href="#" class="aFooter">GitHub</a></li>
                                </ul>  
                                <ul class="GBOX"><span class="GBOXT">GBOX</span>
                                    <li><a href="#" class="aFooter">News</a></li>
                                    <li><a href="#" class="aFooter">Reviews</a></li>
                                    <li><a href="#" class="aFooter">Best Selling</a></li>
                                    <li><a href="#" class="aFooter">Videos</a></li>
                                    <li><a href="#" class="aFooter">Forum</a></li>
                                </ul>  
                                <ul class="termPrivacy">
                                    <li><a href="#" class="aFooter">About US</a></li>
                                    <li><a href="#" class="aFooter">Terms and conditions</a></li>
                                    <li><a href="#" class="aFooter">Privacy Policy</a></li>
                                    <li><a href="#" class="aFooter">Contact US</a></li>
                                </ul>   
                                </div>
                            </footer>

                </body>
                