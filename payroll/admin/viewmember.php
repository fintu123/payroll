<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GG PRINTERS</title><style type="text/css">
.style1 {
	font-family: "Courier New", Courier, monospace;
	font-size: 60px;
	color: #FFFFFF;
	font-style: italic;
}
.style2 {
	font-size: 22px;
	color: black;
}
.style6 {font-size: 16px}
footer {
  text-align: center;
  padding: 20px;
  background-color: black;
  color: white;
  
  bottom: 0;
  width: 100%;
}
tr{

}
tr:hover{
	background-color: white;

 
}
</style>
</head>
<html>

<body>
<table width="800" border="1" align="center">
      <tr>
        <td bordercolor="#330033" bgcolor="#1abc9c"><h1 align="center"><strong><span class="style1">Attendance System</span></strong></h1></td>
      </tr>
      <tr>
        <td bgcolor="#1abc9c"><div align="center">
       						<?php 
									include "menu.php";
							?> 
        				</div>       </td>
      </tr>
      
      	<tr style="background-color: white;"><td colspan="2">
        <form action="" method=post>
        
        <table width="500" border="2" align="center" cellpadding="5" cellspacing="10">
        	<tr>
				  <td colspan="5"><div align="center"><strong><span class="style2">Employees information</span></strong></div></td>
			</tr>
            <tr>
				  <td><div align="center"><strong><span class="style2">Employee No</span></strong></div></td>
                  <td><div align="center"><strong><span class="style2">Name</span></strong></div></td>
                  <td><div align="center"><strong><span class="style2">Mobile</span></strong></div></td>
                  <td><div align="center"><strong><span class="style2">Email</span></strong></div></td>
                 
			</tr>
				
		<?php
			include "include/dbh.php";
			$query = "select *from `member` ";

			$result = mysqli_query($conn,$query)or die("select error error");
			while($rec = mysqli_fetch_array($result))
			{
				echo '<tr height=30px>
				  <td width="222"><span class="style6">'.$rec["enrolment_no"].'</span></td>
				  <td width="222"><span class="style6">'.$rec["name"].'</span></td>
				  <td width="222"><span class="style6">'.$rec["mobile"].'</span></td>
				  <td width="222"><span class="style6">'.$rec["email"].'</span></td>
				  </tr>';			  
			}
		
		?>    
        </table>
        </form>
        </td>
        </tr>
	</table>
		<footer class="Copyright">
	Copyright &copy;2021 | GG PRINTERS, All Rights Reserved
	<label class = "pull-right">Developer: JATIN & FINTU</a></label>
</footer>
    </body>
    </html>
