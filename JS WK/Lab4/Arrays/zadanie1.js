var is_array = function(input) {
    if (toString.call(input) === "[object Array]")
      return true;
    return false;   
};

console.log(is_array('cokolwiek'));
console.log(is_array([1,2,3,4]));