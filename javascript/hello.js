function studs(fName, lName, age){
    this.firstName = fName;
    this.lastName = lName;
    this.age = age;
    this.greeting = function(){
        return "Hi, I'm " + this.firstName +" and I am " + this.age;
    }
};

var students = [];

//var s1 = new studs("dagmawi","tadesse",28);


students.push(new studs("jabe", "sol", 29));
students.push(new studs("martial", "eminem", 25));
students.push(new studs("d12", "hana", 24));

console.log(students);

students.forEach(student => {
    console.log(student.greeting());
});

