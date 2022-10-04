<?php

//interface same as protocol
interface EngineInterface {
    public function goEngine();

    public function stop();
}

class Car{
    //attributes
    public $color;
    public $year;
    public $manufacture;
    public $engine;

    //constructor
    public function __construct($color, $year, $made, EngineInterface $engineCl){
        $this->color = $color;
        $this->year = $year;
        $this->manufacture = $made;
        $this->engine = $engineCl;
    }

    //functions, behaviour
    public function startEngine(){
        $this->engine->goEngine();
    }

    public function go() {
        $this->engine->stop();
    }


}

class Engine implements EngineInterface {
    public function goEngine(){

    }

    public function stop(){

    }
}

class AnotherEngine implements EngineInterface {
    public function goEngine()
    {
        // TODO: Implement goEngine() method.
    }

    public function stop()
    {
        // TODO: Implement stop() method.
    }
}

//Object
$engineClass = new Engine();
$anotherEngineClass = new AnotherEngine();

$carClass = new Car("black", 2022, "Mersedes", $engineClass);
$anotherCarClass = new Car("red", 1902, "MersedesBenz", $anotherEngineClass);

$carClass->startEngine();
$carClass->go();

//new second Object(we can write object like this)
$secondCar = new Car;
$secondCar->color = "brown";
$secondCar->year = 2022;
$secondCar->manufacture = "Porshe";

//new third Object
$thirdCar = new Car;

//SECOND CLASS TEACHER
class Teacher{
    protected $name;
    private $subject;
    private $timeOfLesson;
    protected $office;

    public function __construct($name, $sub, $tim, $offi){
        $this->name = $name;
        $this->subject = $sub;
        $this->timeOfLesson = $tim;
        $this->changeSetOffice($offi);
    }

    public function askQuestion() {

    }

    public function giveTask(){

    }

    public function changeSetOffice($office)
    {
        if (is_string($office)){
            $this->office = $office;
        }
        die("It is not String!");
    }

    public function giveSetName($name){ //setter
        $this->name = $name;
    }

    public function getName()   //getter
    {
        return $this->name;
    }

    public function giveSetSubject($subject)
    {
        $this->subject = $subject;
    }

    public function setTimeOfLesson($timeOfLesson)
    {
        $this->timeOfLesson = $timeOfLesson;
    }
}

$teacherClass = new Teacher();

$teacherClass->changeSetOffice("F303");
$teacherClass->giveSetName("Qwefwr");
//to see what is name:
echo $teacherClass->getName();

$teacherClass->giveSetSubject("IOS");
$teacherClass->setTimeOfLesson(123);

$teacherClass->askQuestion();
$teacherClass->giveTask();

class HR{
    public $employeeName;
    public $employeeKnowledge;
    public $contact;

    public function __construct($name, $knowledge, $contact){
        $this->employeeKnowledge = $knowledge;
        $this->employeeName = $name;
        $this->contact = $contact;
    }

    public function askQuection(){
        print_f("Hello");
    }

    public function checkKnowledge(){

    }
}

$hrClass = new HR("Qdfs", "HTML/CSS, PHP, Java, Oracle Pl/SQL, SQL, OOP, IOS, Phyton for data analytics", 87059813737);
$hrClass->askQuection();
$hrClass->checkKnowledge();


class Doctor extends Teacher{
    private $major;
    public $drag;

    public function __construct($major, $drag, $name, $office){
        $this->major = $major;
        $this->drag = $drag;
        $this->name = $name;
        $this->office = $office;
    }

    public function askQuestion()
    {
        echo "Hi";
    }

}

$doctorClass = new Doctor("Hellen", "rthrth", "htrht", "thrrt"); //????



