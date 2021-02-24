<?php

class Students {
	public $abc = 'audhshjhd';
	static $xyz = 'xyz';

	function_construct() {
		echo "initialized";
	}
}

      public function student_name($name) {
      	echo $name;
      }

      static function student_age($age){
      	echo $age;

      	/*$this->student_name('abc');*/
      }


      /*$stud1 = new Students;
      $stud1->student_name('student1');
      $stud1->student_age('22');
      echo $stud1->abc;
      echo $stud1->xyz;
      echo Students::$xyz;

      Students::student_age('25');

      $stud2 = new Students;*/


      class ParentClass {
      	function method1(){
      		echo "method 1";
      	}

      	function method2(){
      		echo "method 2";
      	}
      }

             class ChildClass extends ParentClass {
             	function method3(){
             		echo "method 3";
             		$this->method2();
             	}
             }

           /*  $cl = new ChildClass;
             $cl->method3();*/


             interface abc {
             	function xyz();
             	function pqr();
             }

             class myClass implements abc {
             	function xyz(){
             		echo "method xyz";
             	}
             	function pqr(){
             		echo "method pqr";
             	}
             }

             $ml = new myClass;
             $ml->xyz();
 ?>