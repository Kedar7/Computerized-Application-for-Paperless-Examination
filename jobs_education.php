<?php
	$degrees = "";
	//$result3 = mysql_query("SELECT * FROM masters where Master_Type='Degrees'");
	//while($row3 = mysql_fetch_array($result3))
	//{	
	//	$degrees .= "<option value='".$row3['Master_Value']."'>".$row3['Master_Value']."</option>";
	//}
	$degrees .= "<option value=''></option>";
	$degrees .= "<option value='Ph.D'>Ph.D</option>";
	$degrees .= "<option value='M.E/M.Tech>M.E/M.Tech</option>";
	$degrees .= "<option value='M.Arch'>M.Arch</option>";
	$degrees .= "<option value='MSc'>MSc</option>";
	$degrees .= "<option value='MCA'>MCA</option>";
	$degrees .= "<option value='MBA'>MBA</option>";
	$degrees .= "<option value='B.E/B.Tech'>B.E/B.Tech</option>";
	$degrees .= "<option value='B.Arch'>B.Arch</option>";
	$degrees .= "<option value='BCA'>BCA</option>";
	$degrees .= "<option value='BSc'>BSc</option>";
	$degrees .= "<option value='BBA'>BBA</option>";
	$degrees .= "<option value='Diploma'>Diploma</option>";
	$degrees .= "<option value='PUC/12'>PUC/12</option>";
	$degrees .= "<option value='SSLC/SSC/10'>SSLC/SSC/10</option>";
	$degrees .= "<option value='MA/English'>MA/English</option>";


	$grades  ="";
	$grades  .= "<option value=''></option>";
	$grades  .= "<option value='CGPA'>CGPA</option>";
	$grades  .= "<option value='FCD Gold'>FCD Gold</option>";
	$grades  .= "<option value='FCD'>FCD</option>";
	$grades  .= "<option value='FC'>FC</option>";
	$grades  .= "<option value='SC'>SC</option>";
	$grades  .= "<option value='TC'>TC</option>";
	$grades  .= "<option value='A+'>A+</option>";
	$grades  .= "<option value='A'>A</option>";
	$grades  .= "<option value='B+'>B+</option>";
	$grades  .= "<option value='B'>B</option>";
	$grades  .= "<option value='C+'>C+</option>";
	$grades  .= "<option value='C'>C</option>";
	$grades  .= "<option value='Pursuing'>Pursuing</option>";
	$grades  .= "<option value='Awaiting'>Awaiting</option>";
?>
Education Details : Please provide details from highest chronological order
<table id="education" class="table table-striped table-bordered table-condensed table-responsive" cellspacing="0">
    <thead>
    <tr>
        <th>Degree</th>
        <th>Specialization</th>
        <th>Passing Year</th>
        <th>Univ./Board</th>
        <th>Marks %</th>
        <th>Class/Grade</th>
    </tr>
    </thead>
	<tr>
		<td><select type="text" name="edu_Degree[]" required="required">
			<?php echo $degrees; ?>
		</select></td>
		<td><input type="text" name="edu_Speci[]"       maxlength="25" placeholder="max 25 chrs" required="required"></input></td>
		<td><input type="text" name="edu_PassingYear[]" maxlength="4"  placeholder="e.g 2001" required="required"></input></td>
		<td><input type="text" name="edu_UnivBoard[]"   maxlength="30" placeholder="max 30 chrs" required="required"></input></td>
		<td><input type="number" name="edu_Marks[]"     maxlength="6"  min=0 max=100.00 required="required"></input></td>
		<td><select type="text" name="edu_ClassGrade[]" required="required">
			<?php echo $grades; ?>
		</select></td>
	</tr>
	<tr>
		<td><select type="text" name="edu_Degree[]">
			<?php echo $degrees; ?>
		</select></td>
		<td><input type="text" name="edu_Speci[]"       maxlength="25" placeholder="max 25 chrs"></input></td>
		<td><input type="text" name="edu_PassingYear[]" maxlength="4"  placeholder="e.g 2001"></input></td>
		<td><input type="text" name="edu_UnivBoard[]"   maxlength="30" placeholder="max 30 chrs"></input></td>
		<td><input type="number" name="edu_Marks[]"     maxlength="6"  min=0 max=100.00 ></input></td>
		<td><select type="text" name="edu_ClassGrade[]" >
			<?php echo $grades; ?>
		</select></td>
	</tr>
	<tr>
		<td><select type="text" name="edu_Degree[]" >
			<?php echo $degrees; ?>
		</select></td>
		<td><input type="text" name="edu_Speci[]"       maxlength="25" placeholder="max 25 chrs"></input></td>
		<td><input type="text" name="edu_PassingYear[]" maxlength="4"  placeholder="e.g 2001"></input></td>
		<td><input type="text" name="edu_UnivBoard[]"   maxlength="30" placeholder="max 30 chrs"></input></td>
		<td><input type="number" name="edu_Marks[]"     maxlength="6"  min=0 max=100.00 ></input></td>
		<td><select type="text" name="edu_ClassGrade[]" >
			<?php echo $grades; ?>
		</select></td>
	</tr>
	<tr>
		<td><select type="text" name="edu_Degree[]" >
			<?php echo $degrees; ?>
		</select></td>
		<td><input type="text" name="edu_Speci[]"       maxlength="25" placeholder="max 25 chrs"></input></td>
		<td><input type="text" name="edu_PassingYear[]" maxlength="4"  placeholder="e.g 2001"></input></td>
		<td><input type="text" name="edu_UnivBoard[]"   maxlength="30" placeholder="max 30 chrs"></input></td>
		<td><input type="number" name="edu_Marks[]"     maxlength="6"  min=0 max=100.00 ></input></td>
		<td><select type="text" name="edu_ClassGrade[]" >
			<?php echo $grades; ?>
		</select></td>
	</tr>
	<tr>
		<td><select type="text" name="edu_Degree[]" >
			<?php echo $degrees; ?>
		</select></td>
		<td><input type="text" name="edu_Speci[]"       maxlength="25" placeholder="max 25 chrs"></input></td>
		<td><input type="text" name="edu_PassingYear[]" maxlength="4"  placeholder="e.g 2001"></input></td>
		<td><input type="text" name="edu_UnivBoard[]"   maxlength="30" placeholder="max 30 chrs"></input></td>
		<td><input type="number" name="edu_Marks[]"     maxlength="6"  min=0 max=100.00 ></input></td>
		<td><select type="text" name="edu_ClassGrade[]" >
			<?php echo $grades; ?>
		</select></td>
	</tr>
	<tr>
		<td><select type="text" name="edu_Degree[]" >
			<?php echo $degrees; ?>
		</select></td>
		<td><input type="text" name="edu_Speci[]"       maxlength="25" placeholder="max 25 chrs"></input></td>
		<td><input type="text" name="edu_PassingYear[]" maxlength="4"  placeholder="e.g 2001"></input></td>
		<td><input type="text" name="edu_UnivBoard[]"   maxlength="30" placeholder="max 30 chrs"></input></td>
		<td><input type="number" name="edu_Marks[]"     maxlength="6"  min=0 max=100.00 ></input></td>
		<td><select type="text" name="edu_ClassGrade[]" >
			<?php echo $grades; ?>
		</select></td>
	</tr>
	<tr>
		<td><select type="text" name="edu_Degree[]" >
			<?php echo $degrees; ?>
		</select></td>
		<td><input type="text" name="edu_Speci[]"       maxlength="25" placeholder="max 25 chrs"></input></td>
		<td><input type="text" name="edu_PassingYear[]" maxlength="4"  placeholder="e.g 2001"></input></td>
		<td><input type="text" name="edu_UnivBoard[]"   maxlength="30" placeholder="max 30 chrs"></input></td>
		<td><input type="number" name="edu_Marks[]"     maxlength="6"  min=0 max=100.00 ></input></td>
		<td><select type="text" name="edu_ClassGrade[]" >
			<?php echo $grades; ?>
		</select></td>
	</tr>
	<tr>
		<td><select type="text" name="edu_Degree[]" >
			<?php echo $degrees; ?>
		</select></td>
		<td><input type="text" name="edu_Speci[]"       maxlength="25" placeholder="max 25 chrs"></input></td>
		<td><input type="text" name="edu_PassingYear[]" maxlength="4"  placeholder="e.g 2001"></input></td>
		<td><input type="text" name="edu_UnivBoard[]"   maxlength="30" placeholder="max 30 chrs"></input></td>
		<td><input type="number" name="edu_Marks[]"     maxlength="6"  min=0 max=100.00 ></input></td>
		<td><select type="text" name="edu_ClassGrade[]" >
			<?php echo $grades; ?>
		</select></td>
	</tr>
	<tr>
		<td><select type="text" name="edu_Degree[]" >
			<?php echo $degrees; ?>
		</select></td>
		<td><input type="text" name="edu_Speci[]"       maxlength="25" placeholder="max 25 chrs"></input></td>
		<td><input type="text" name="edu_PassingYear[]" maxlength="4"  placeholder="e.g 2001"></input></td>
		<td><input type="text" name="edu_UnivBoard[]"   maxlength="30" placeholder="max 30 chrs"></input></td>
		<td><input type="number" name="edu_Marks[]"     maxlength="6"  min=0 max=100.00 ></input></td>
		<td><select type="text" name="edu_ClassGrade[]" >
			<?php echo $grades; ?>
		</select></td>
	</tr>
	<tr>
		<td><select type="text" name="edu_Degree[]" >
			<?php echo $degrees; ?>
		</select></td>
		<td><input type="text" name="edu_Speci[]"       maxlength="25" placeholder="max 25 chrs"></input></td>
		<td><input type="text" name="edu_PassingYear[]" maxlength="4"  placeholder="e.g 2001"></input></td>
		<td><input type="text" name="edu_UnivBoard[]"   maxlength="30" placeholder="max 30 chrs"></input></td>
		<td><input type="number" name="edu_Marks[]"     maxlength="6"  min=0 max=100.00 ></input></td>
		<td><select type="text" name="edu_ClassGrade[]" >
			<?php echo $grades; ?>
		</select></td>
	</tr>
</table>

