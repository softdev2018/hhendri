function person(name, age) {
  this.name = name;
  this.age = age;
  this.changeName = function (name) {
    this.name = name;
  }
}

var p = new person("Haidar", 19);
p.changeName("Hendri");
//Now p.name equals to "John"
