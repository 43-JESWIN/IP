<?php

class OnlineCourse {
   public $title;
   public $instructor;
   public $duration;
   public $price;
   public $enrolledStudents = [];

    public function __construct($title, $instructor, $duration, $price) {
        $this->title = $title;
        $this->instructor = $instructor;
        $this->duration = $duration;
        $this->price = $price;
    }

    public function enrollStudent($studentName) {
        $this->enrolledStudents[] = $studentName;
    }

    public function getCourseMaterials() {
        // Implement method to provide access to course materials
        return "<h3>Access course materials for '{$this->title}'</h3>";
    }

    public function trackProgress($studentName, $progress) {
        return "$studentName has progressed $progress% in '{$this->title}'";
    }

}
$course = new OnlineCourse("Introduction to PHP", "John Doe", "4 weeks", "$50");

echo "<p>{$course->getCourseMaterials()}</p>";
echo "<p>{$course->trackProgress('Alice', 25)}</p>";
echo "<p>{$course->trackProgress('Bob', 50)}</p>";
echo "<p>{$course->trackProgress('Jack', 75)}</p>";

$course = new OnlineCourse("HTML,CSS and JavaScript", "Jeswin", "4 weeks", "$30");
echo "<p>{$course->getCourseMaterials()}</p>";
echo "<p>{$course->trackProgress('Joe', 25)}</p>";
echo "<p>{$course->trackProgress('JesDan', 50)}</p>";
echo "<p>{$course->trackProgress('Jackson', 75)}</p>";



?>