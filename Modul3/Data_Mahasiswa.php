<?php
//Buat namespace dan trait di bagian atas untuk membantu pemformatan
namespace App\Helper;

trait Formatter {
    public function formatName($name) {
        return $name;
    }

    public function formatAge($age) {
        return $age . " Tahun";
    }
}

namespace App;

//Abstract class 'Person' dengan dua properti dan satu metode abstrak
abstract class Person {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    abstract public function getDescription(): string;

    //Magic method __toString untuk menampilkan informasi Person
    public function __toString() {
        return "Name: {$this->name}, Age: {$this->age}";
    }
}

//Class 'Student' yang mewarisi dari 'Person' dan menggunakan trait Formatter
class Student extends Person {
    use \App\Helper\Formatter;

    private $studentId;
    private $major;

    public function __construct($name, $age, $studentId, $major) {
        parent::__construct($name, $age);
        $this->studentId = $studentId;
        $this->major = $major;
    }

    //Implementasi method abstrak
    public function getDescription(): string {
        return "NIM: {$this->studentId}, Jurusan: {$this->major}";
    }

    //Method untuk menampilkan informasi lengkap mahasiswa
    public function getFullInfo(): string {
        $formattedName = $this->formatName($this->name);
        $formattedAge = $this->formatAge($this->age);
        return "{$formattedName}, {$formattedAge}, NIM: {$this->studentId}, Jurusan: {$this->major}";
    }
}

//Eksekusi program
$student = new Student("Hilma", 21, "202210370311174", "Teknik Informatika");
echo $student->getFullInfo();
