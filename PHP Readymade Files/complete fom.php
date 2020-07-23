<?php
		$name = $email = $password = $department = $programming = $gender= "";
		if(isset($_POST['submit'])){
			$name         = test_input($_POST['name']);
			$email        = test_input($_POST['email']);
			$password     = test_input($_POST['password']);
			$department   = $_POST['department'];
			
			 if(isset($_POST['gender'])) {
				$gender = $_POST['gender'];
				$programming  = $_POST['programming'];
				}
				else{
				 $gender = "";
				 $programming  = "";
				}
		
	
	?>

	
	<table>
		<tr>
			<td>Name : </td>
			<td><?php echo $name; ?></td>
		</tr>
		<tr>
			<td>Email : </td>
			<td><?php echo $email; ?></td>
		</tr>
		<tr>
			<td>Password : </td>
			<td><?php echo $password; ?></td>
		</tr>
		<tr>
			<td>Department : </td>
			<td><?php echo $department; ?></td>
		</tr>
		<tr>
			<td>Progamming : </td>
			<?php
				if(isset($_POST['programming'])){ ?>
					<td>
			<?php	foreach($programming as $key => $value){
					 echo $value.",  " ?>
			<?php	}
					
				} ?>
					</td>
			
		</tr> 
		<tr>
			<td>Gender : </td>
			<?php
				
				if($gender == "Male"){ ?>
					<td> <?php echo "Male"; ?> </td>
			<?php	}
				elseif($gender == "Female"){ ?>
					<td> <?php echo "Female"; ?></td>
			<?php	}
				elseif($gender == "Others") { ?>
					<td> <?php echo "Others"; ?></td>
			<?php	}
				else {?>
					<td><?phpecho "";?></td>
			<?php	}?>
				
			 
		</tr>
	</table>
	<?php } ?>
	<?php
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}
	?>
	
	
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<table>
			<tr>
				<td>Name : </td>
				<td><input type="text" name="name"  /></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type="email" name="email"  /></td>
			</tr>
			<tr>
				<td>Password : </td>
				<td><input type="password" name="password"  /></td>
			</tr>
			<tr>
				<td>Department : </td>
				<td>
					<select name="department"  >
						<option>Select</option>
						<option value="CSE">CSE</option>
						<option value="EEE">EEE</option>
						<option value="Math">Math</option>
						<option value="Physics">Physics</option>
						<option value="Civil">Civil</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Progamming Skill : </td>
				<td>
					<input type="checkbox" name="programming[]" value="C" />C
					<input type="checkbox" name="programming[]" value="C#" />C#
					<input type="checkbox" name="programming[]" value="C++" />C++
					<input type="checkbox" name="programming[]" value="Java" />Java
					<input type="checkbox" name="programming[]" value="PHP" />PHP
					<input type="checkbox" name="programming[]" value="JavaScript" />JavaScript
					<input type="checkbox" name="programming" value="Python" />Python
				</td>
			</tr>
			<tr>
				<td>Gender : </td>
				<td>
					<input type="radio" name="gender" value="Male" />Male
					<input type="radio" name="gender" value="Female" />Female
					<input type="radio" name="gender" value="Others" />Others
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="Submit" name="submit" />
					<input type="reset" value="Reset" name="reset" />
				</td>
			</tr>
		</table>
	</form>	