<?php
// class person
class person
{
	//Attributes of the class
	public $firstname;
	public $secondname;
	public $age;
	public $location;
	public $tel;
	public $email;


	//function gives us name of person
	function firstname($firstname)
	{
		return $this->firstname;
    }


	function secondname($secondname)
	{
		return $this->second;
	}


	function age($age)
	{
		return $this->age;
	}


	function location($location)
	{
		return $this->location;
	}

	function tel($tel)
	{
		return $this->tel;
	}
	function email($email)
	{
		return $this->email;
	}

}

//create anobject from the class person

$person =new person;
//accessing a function in a class through a

 echo ("My name is ");
echo $person->firstname=("Clare ");
echo $person->secondname=("Naliaka, ");
echo ("am ");
echo $person->age=("24yrs old  ");
echo "<br/>";

echo ("I come from ");
echo $person->location=("Kakamega");
echo "<br/>";

echo ("you can reach me through the follow:");
echo $person->tel=("073847976 ");
echo $person->email=("or yalekky@gmail.com");
?>
