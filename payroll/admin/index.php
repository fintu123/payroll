<?php "dbh.php";
?>
<title>GG PRINTERS</title>
<style>
   footer {
  text-align: center;
  padding: 20px;
  background-color: black;
  color: white;
   position: fixed;
  bottom: 0;
  width: 100%;
}
.style1 {
	font-family: "Courier New", Courier, monospace;
	font-size: 60px;
	color: #FFFFFF;
	font-style: italic;
}
.style2 {
	font-size: 24px;
	color: #0000FF;
}
.style6 {font-size: 16px}
</style></head>

<body>
<table width="800" border="1" align="center">
      <tr>
        <td bordercolor="black" bgcolor="#1abc9c"><h1 align="center"><strong><span class="style1">ADD EMPLOYEE</span></strong></h1></td>
      </tr>
      <tr>
        <td bgcolor="#1abc9c"><div align="center">
       						<?php 
									include "menu.php";
							?> 
        				</div>       </td>
      </tr>
      <tr>
        <td><div align="center">
        <form action="insertmember.php" method="post">
          <table width="400" border="2" align="center">
            <tr>
              <td colspan="2"><div align="center"><strong><span class="">Enter the Employee information</span></strong></div></td>
            </tr>
            <tr>
              <td width="160"><span class="style6">Name</span></td>
              <td width="222"><span class="style6"><input type="text" name="name" /></span></td>
            </tr>
            <tr>
              <td><span class="style6">Mobile</span></td>
              <td><span class="style6"><input type="text" name="mobile" /></span></td>
            </tr>
            <tr>
              <td><span class="style6">Email</span></td>
              <td><span class="style6"><input type="email" name="email" /></span></td>
            </tr>
            <tr>
              <td colspan="2"><div align="center">
                <input type="submit" value="Add Employee" name="btnsubmit"/>
                &nbsp;&nbsp;
                <input type="reset" value="Reset" name="btnreset"/>
              </div></td>
            </tr>
          </table>
          </form>
        </div></td>
      </tr>
    </table>
    <footer class="Copyright">
	Copyright &copy;2021 | GG PRINTERS, All Rights Reserved
	<label class = "pull-right">Developer: JATIN & FINTU</a></label>
</footer>
</body>
</html>