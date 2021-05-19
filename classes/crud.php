<?php
include_once "config.php";

class Crud extends Config
{

	function __construct()
	{
		parent::__construct();
	}


//Display All
	public function displayAll($table)
	{
		$query = "SELECT * FROM {$table}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}



	public function displayAllWithOrder($table,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}


	public function displayAllSpecific($table,$value,$item)
	{
		$query = "SELECT * FROM {$table} WHERE $value='$item' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}


		public function displayAllSpecificWithOrder($table,$value,$item,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} WHERE $value='$item' ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}



	
	public function displayWithLimit($table,$limit)
	{
		$query = "SELECT * FROM {table} limit {$limit}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}




	//Display Specific
	public function displayName($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT name FROM login where email='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return "No found records";
		}
	}



	public function displayOne($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where email='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}


		public function displayOneSpecific($table,$item,$value)
	{
		$item = $this->cleanse($item);
		$value = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where $item='$value' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}

		public function displayNameById($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return 0;
		}
	}


	

	public function state_one($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT id,name FROM state where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return "No found records";
		}
	}

	

//Counting All
	public function countAll($table)
	{
		$q=$this->con->query("SELECT id FROM {$table}");
		if ($q) {
			return $q->num_rows;
		} else {
			return 0;
		}
		
		
	}



		public function countAllWithTwo($table,$item,$value)
	{
		$q=$this->con->query("SELECT id FROM {$table} where $item='$value' ");
		if ($q) {
			return $q->num_rows;
		} else {
			return 0;
		}
		
		
	}


	
// Inserting


	
	public function addUser($value)
	{

		$name = $this->cleanse($_POST['name']);
		$email = $this->cleanse($_POST['email']);
		$phone = $this->cleanse($_POST['phone']);
		$address = $this->cleanse($_POST['address']);
		$password = $this->cleanse($_POST['password']);
		$gender = $this->cleanse($_POST['gender']);

		$query="INSERT INTO user(name,email,phone,address,password,gender) VALUES('$name','$email','$phone','$address','$password','$gender')";
		$query2="INSERT INTO login(name,email,password,role) VALUES('$name','$email','$password','3')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:login.php?msg=Account was created successfully, Please login &type=success");
			$this->con->query($query2);
		}else{
			header("Location:login.php?msg=Error adding data try again!&type=error");
		}
	}


		public function addDiagnosis($value)
	{

		$f1 = isset($_POST['f1']) ? 1: 0;
		$f2 = isset($_POST['f2']) ? 1: 0;
		$f3 = isset($_POST['f3']) ? 1: 0;
		$f4 = isset($_POST['f4']) ? 1: 0;
		$f5 = isset($_POST['f5']) ? 1: 0;
		$f6 = isset($_POST['f6']) ? 1: 0;
		$f7 = isset($_POST['f7']) ? 1: 0;
		$f8 = isset($_POST['f8']) ? 1: 0;
		$f9 = isset($_POST['f9']) ? 1: 0;
		$f10 =isset($_POST['f10']) ? 1: 0;
		$f11 = isset($_POST['f11']) ? 1: 0;
		$f12 = isset($_POST['f12']) ? 1: 0;
		$f13 = isset($_POST['f13']) ? 1: 0;
		$f14 = isset($_POST['f14']) ? 1: 0;
		$f15 = isset($_POST['f15']) ? 1: 0;
		$f16 = isset($_POST['f16']) ? 1: 0;
		$f17 = isset($_POST['f17']) ? 1: 0;
		$f18 = isset($_POST['f18']) ? 1: 0;
		$f19 = isset($_POST['f19']) ? 1: 0;
		$f20 = isset($_POST['f20']) ? 1: 0;
		$f21 = isset($_POST['f21']) ? 1: 0;
		$f22 = isset($_POST['f22']) ? 1: 0;
		$f23 = isset($_POST['f23']) ? 1: 0;
		$f24 = isset($_POST['f24']) ? 1: 0;
		$f25 = isset($_POST['f25']) ? 1: 0;
		$f26 = isset($_POST['f26']) ? 1: 0;
		$f27 = isset($_POST['f27']) ? 1: 0;
		$f28 = isset($_POST['f28']) ? 1: 0;
		$f29 = isset($_POST['f29']) ? 1: 0;
		$f30 = isset($_POST['f30']) ? 1: 0;
		$f31 = isset($_POST['f31']) ? 1: 0;
		$f32 = isset($_POST['f32']) ? 1: 0;
		$f33 = isset($_POST['f33']) ? 1: 0;
		$f34 = isset($_POST['f34']) ? 1: 0;
		$f35 = isset($_POST['f35']) ? 1: 0;
		$f36 = isset($_POST['f36']) ? 1: 0;
		$f37 = isset($_POST['f37']) ? 1: 0;
		$f38 = isset($_POST['f38']) ? 1: 0;
		$f39 = isset($_POST['f39']) ? 1: 0;
		$f40 = isset($_POST['f40']) ? 1: 0;
		$f41 = isset($_POST['f41']) ? 1: 0;
		$f42 = isset($_POST['f42']) ? 1: 0;
		$f43 = isset($_POST['f43']) ? 1: 0;
		$f44 = isset($_POST['f44']) ? 1: 0;
		$f45 = isset($_POST['f45']) ? 1: 0;
		$f46 = isset($_POST['f46']) ? 1: 0;
		$f47 = isset($_POST['f47']) ? 1: 0;
		$f48 = isset($_POST['f48']) ? 1: 0;
		$f49 = isset($_POST['f49']) ? 1: 0;


		$result = $this->cleanse($_POST['result']);
		$advice = $this->cleanse($_POST['advice']);

		$query="INSERT INTO diagnosis(f1,f2,f3,f4,f5,f6,f7,f8,f9,f10,f11,f12,f13,f14,f15,f16,f17,f18,f19,f20,f21,f22,f23,f24,f25,f26,f27,f28,f29,f30,f31,f32,f33,f34,f35,f36,f37,f38,f39,f40,f41,f42,f43,f44,f45,f46,f47,f48,f49,result,advice) VALUES ('$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$f9','$f10','$f11','$f12','$f13','$f14','$f15','$f16','$f17','$f18','$f19','$f20','$f21','$f22','$f23','$f24','$f25','$f26','$f27','$f28','$f29','$f30','$f31','$f32','$f33','$f34','$f35','$f36','$f37','$f38','$f39','$f40','$f41','$f42','$f43','$f44','$f45','$f46','$f47','$f48','$f49','$result','$advice')";

		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-diagnose.php?msg=Diagnosis was created successfully&type=success");
		}else{
			header("Location:view-diagnose.php?msg=Error adding data try again!&type=error");
		}
	}



			public function addReport($email,$diagnosis_id)
	{
		
		$diagnosis_id = $this->cleanse($diagnosis_id);
		$user= $this->displayOne('user',$this->cleanse($email));
		$user_id =$user['id'];

		$query="INSERT INTO report(user_id,diagnosis_id) VALUES ('$user_id','$diagnosis_id')";
		$sql = $this->con->query($query);
		// if ($sql==true) {
		// 	header("Location:add-diagnose.php?msg=Diagnosis was processed&type=success");
		// }else{
		// 	header("Location:add-diagnose.php?msg=Error processing diagnosis try again!&type=error");
		// }
	}


		public function compareDiagnosis($post)
	{
		$f1 = isset($_POST['f1']) ? 1: 0;
		$f2 = isset($_POST['f2']) ? 1: 0;
		$f3 = isset($_POST['f3']) ? 1: 0;
		$f4 = isset($_POST['f4']) ? 1: 0;
		$f5 = isset($_POST['f5']) ? 1: 0;
		$f6 = isset($_POST['f6']) ? 1: 0;
		$f7 = isset($_POST['f7']) ? 1: 0;
		$f8 = isset($_POST['f8']) ? 1: 0;
		$f9 = isset($_POST['f9']) ? 1: 0;
		$f10 =isset($_POST['f10']) ? 1: 0;
		$f11 = isset($_POST['f11']) ? 1: 0;
		$f12 = isset($_POST['f12']) ? 1: 0;
		$f13 = isset($_POST['f13']) ? 1: 0;
		$f14 = isset($_POST['f14']) ? 1: 0;
		$f15 = isset($_POST['f15']) ? 1: 0;
		$f16 = isset($_POST['f16']) ? 1: 0;
		$f17 = isset($_POST['f17']) ? 1: 0;
		$f18 = isset($_POST['f18']) ? 1: 0;
		$f19 = isset($_POST['f19']) ? 1: 0;
		$f20 = isset($_POST['f20']) ? 1: 0;
		$f21 = isset($_POST['f21']) ? 1: 0;
		$f22 = isset($_POST['f22']) ? 1: 0;
		$f23 = isset($_POST['f23']) ? 1: 0;
		$f24 = isset($_POST['f24']) ? 1: 0;
		$f25 = isset($_POST['f25']) ? 1: 0;
		$f26 = isset($_POST['f26']) ? 1: 0;
		$f27 = isset($_POST['f27']) ? 1: 0;
		$f28 = isset($_POST['f28']) ? 1: 0;
		$f29 = isset($_POST['f29']) ? 1: 0;
		$f30 = isset($_POST['f30']) ? 1: 0;
		$f31 = isset($_POST['f31']) ? 1: 0;
		$f32 = isset($_POST['f32']) ? 1: 0;
		$f33 = isset($_POST['f33']) ? 1: 0;
		$f34 = isset($_POST['f34']) ? 1: 0;
		$f35 = isset($_POST['f35']) ? 1: 0;
		$f36 = isset($_POST['f36']) ? 1: 0;
		$f37 = isset($_POST['f37']) ? 1: 0;
		$f38 = isset($_POST['f38']) ? 1: 0;
		$f39 = isset($_POST['f39']) ? 1: 0;
		$f40 = isset($_POST['f40']) ? 1: 0;
		$f41 = isset($_POST['f41']) ? 1: 0;
		$f42 = isset($_POST['f42']) ? 1: 0;
		$f43 = isset($_POST['f43']) ? 1: 0;
		$f44 = isset($_POST['f44']) ? 1: 0;
		$f45 = isset($_POST['f45']) ? 1: 0;
		$f46 = isset($_POST['f46']) ? 1: 0;
		$f47 = isset($_POST['f47']) ? 1: 0;
		$f48 = isset($_POST['f48']) ? 1: 0;
		$f49 = isset($_POST['f49']) ? 1: 0;
		
		$query = "SELECT * from diagnosis where f1='$f1' and f2='$f2' and f3='$f3' and f4='$f4' and f5='$f5' and f6='$f6' and f7='$f7' and f8='$f8' and f9='$f9' and f10='$f10' and f11='$f11' and f12='$f12' and f13='$f13' and f14='$f14' and f15='$f15' and f16='$f16' and f17='$f17' and f18='$f18' and f19='$f19' and f20='$f20' and f21='$f21' and f22='$f22' and f23='$f23' and f24='$f24' and f25='$f25' and f26='$f26' and f27='$f27' and f28='$f28' and f29='$f29' and f30='$f30' and f31='$f31' and f32='$f32' and f33='$f33' and f34='$f34' and f35='$f35' and f36='$f36' and f37='$f37' and f38='$f38' and f39='$f39' and f40='$f40' and f41='$f41' and f42='$f42' and f43='$f43' and f44='$f44' and f45='$f45' and f46='$f46' and f47='$f47' and f48='$f48' and f49='$f49'  ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}



	public function updateAdmin($post)
	{
		
		$email=$this->cleanse($_POST['email']);
		$password=$this->cleanse($_POST['password']);
		$query="UPDATE login SET email='$email',password='$password' WHERE email='$email' ";
		$sql=$this->con->query($query);
		if ($sql==true) {
			header("Location:profile.php?msg=Account was updated successfully&type=success");
		}else{
			header("Location:profile.php?msg=Error updating account try again!&type=error");
		}
	}




	public function displayProfile($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM login where email='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return "No found records";
		}
	}



//Empty Table
	public function emptyTable($table,$url) 
	{ 
		$id = $this->cleanse($id);
		$query = "TRUNCATE {$table}";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?msg=Data was successfully deleted&type=success");
		} else {
			header("Location:$url?msg=Error deleting data&type=error");
		}
	}



//Delete Items
	public function delete($id, $table,$url) 
	{ 
		$id = $this->cleanse($id);
		$query = "DELETE FROM {$table} WHERE id = $id";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?msg=Data was successfully deleted&type=success");
		} else {
			header("Location:$url?msg=Error deleting data&type=error");
		}
	}
	

	public function deleteTwoTable($matno,$table,$table2,$url) 
	{ 
		$matno = $this->cleanse($matno);
		$query = "DELETE FROM {$table} WHERE matno= $matno";
		$query2 = "DELETE FROM {$table2} WHERE matno= $matno";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?msg=Student was successfully deleted&type=success");
			$this->con->query($query2);
		} else {
			header("Location:$url?msg=Error deleting Student&type=error");
		}
	}


//Search
	public function displaySearch($value)
	{
	//Search box value assigning to $Name variable.
		$Name = $this->cleanse($value);
		$query = "SELECT * FROM product WHERE pid LIKE '%$Name%'";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return false;
		}
	}



	public function cleanse($str)
	{
   #$Data = preg_replace('/[^A-Za-z0-9_-]/', '', $Data); /** Allow Letters/Numbers and _ and - Only */
		$str = htmlentities($str, ENT_QUOTES, 'UTF-8'); /** Add Html Protection */
		$str = stripslashes($str); /** Add Strip Slashes Protection */
		if($str!=''){
			$str=trim($str);
			return mysqli_real_escape_string($this->con,$str);
		}
	}




	

	public function greeting()
	{
      //Here we define out main variables 
		$welcome_string="Welcome!"; 
		$numeric_date=date("G"); 

 //Start conditionals based on military time 
		if($numeric_date>=0&&$numeric_date<=11) 
			$welcome_string="Good Morning!,"; 
		else if($numeric_date>=12&&$numeric_date<=17) 
			$welcome_string="Good Afternoon!,"; 
		else if($numeric_date>=18&&$numeric_date<=23) 
			$welcome_string="Good Evening!,"; 

		return $welcome_string;

	}



}

?>

