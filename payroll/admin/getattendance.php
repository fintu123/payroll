<title>GG PRINTERS</title>
<style>

.style1 {

	font-size: 60px;
	color: #FFFFFF;
	font-style: italic;
}
.style2 {
	font-size: 24px;
	
}
.style7 {color: black}
    footer {
  text-align: center;
  padding: 20px;
  background-color: black;
  color: white;
  font-size: 20px;
  bottom: 0;
  width: 100%;
  
  body {
  background-color: rgba(201, 76, 76, 0.3);
}
  
}
</style>
<script type="text/javascript">
	function getatt(value)
	{
		if(value == true)
		{
			document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) - 1;
			document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) + 1;
		}
		else
		{
			document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) + 1;
			document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) - 1;
		}
	}
</script>


<table width="800" border="1" align="center">
      <tr>
        <td bgcolor="#1abc9c"><h1 align="center"><strong><span class="style1">Attendance System</span></strong></h1></td>
      </tr>
      <tr>
        <td bgcolor="#1abc9c"><div align="center">
       						<?php 
									include "menu.php";
							?> 
        				</div>       </td>
      </tr>
      <tr>
        <td>
        <form action="include/getattendance1.php" method="post">
        <table width="250px" align="left" >
            	<tr>
                	<td> Select date : <br />
                   <?php 
				 		    $dt = getdate();
							$day = $dt["mday"];
							$month = date("m");
							$year = $dt["year"];
							
							echo "<select name='cdate'>";
							for($a=1;$a<=31;$a++)
							{
								if($day == $a)
									echo "<option value='$a' selected='selected'>$a</option>";
								else
									echo "<option value='$a' >$a</option>";
							}
							echo "</select><select name='cmonth'>";
							for($a=1;$a<=12;$a++)
							{
								if($month == $a)
									echo "<option value='$a' selected='selected'>$a</option>";
								else
									echo "<option value='$a' >$a</option>";
							}
							echo "</select><select name='cyear'>";
							for($a=2021;$a<=$year;$a++)
							{
								if($year == $a)
									echo "<option value='$a' selected='selected'>$a</option>";
								else
									echo "<option value='$a' >$a</option>";
							}
							echo "</select>";
						?>                    
                    </td>
                </tr>
             </table>	
        
          <table width="400" border="2" align="left" style="margin-left:20px;">
            <tr>
              <td colspan="3" bgcolor="#1abc9c"><div align="center"><strong><span class="style2">Get Attendance</span></strong></div></td>
            </tr>
            <tr>
              <td width="114"><span class="style7"><strong>Employee no</strong></span></td>
              <td width="152"><span class="style7"><strong>Name</strong></span></td>
              <td width="110"><span class="style7"><strong>Attend</strong></span></td>
            </tr>
            <?php
				include "include/dbh.php";
				extract($_POST);
				$query = "select * from `member` order by `member_id`";
				$s = 0;
				$result = mysqli_query($conn,$query)or die("select error");
				while($rec = mysqli_fetch_array($result))
				{
					$s = $s + 1;
					echo ' <tr>
							  <td width="114">'.$rec["enrolment_no"].'</td>
							  <td width="152">'.$rec["name"].'</td>
							  <td width="110"><input type=checkbox name='.$rec["member_id"].' onclick="getatt(thi s.checked);"/></td>
							</tr>';
				}
			?>			
            <tr>
              <td colspan="3"><div align="center" >
                <input type="submit" value="Get Attendance" name="btnsubmit"/>
                &nbsp;&nbsp;</div></td>
            </tr>
          </table>
          </form>
         
         	
         
         </td>
      </tr>
    </table>
    <footer class="Copyright">
	Copyright &copy;2021 | GG PRINTERS, All Rights Reserved
	<label class = "pull-right">Developer: JATIN & FINTU</a></label>
</footer>
