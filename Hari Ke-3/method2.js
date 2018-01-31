function person(name, age) {
  this.name= name;
  this.age = age;
  this.yearOfBirth = bornYear;
}
function bornYear() {
  return 2018 - this.age;
}

var p = new person("Hendri", 20);
document.write(p.yearOfBirth());
